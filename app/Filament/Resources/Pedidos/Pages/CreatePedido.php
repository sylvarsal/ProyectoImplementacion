<?php

namespace App\Filament\Resources\Pedidos\Pages;

use App\Filament\Resources\Pedidos\PedidoResource;
use App\Models\EstadoPedido;
use App\Models\Producto;
use Filament\Resources\Pages\CreateRecord;
use App\Models\EstadoProducto;

class CreatePedido extends CreateRecord
{
    protected static string $resource = PedidoResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['total'] = PedidoResource::calcularTotal($this->data['detallePedido'] ?? []);
        $data['fecha_hora'] = now();
        $data['id_estado'] = EstadoPedido::where('nombre_estado', 'Recibido')
            ->value('id_estado_pedido');

        return $data;
    }

    protected function afterCreate(): void
    {
        foreach ($this->record->detallePedido as $detalle) {
            $producto = Producto::find($detalle->id_producto);

            $producto->stock = max(0, $producto->stock - $detalle->cantidad);

            if ($producto->stock === 0) {
                $producto->id_estado_producto = EstadoProducto::where('nombre_estado', 'Agotado')
                    ->value('id_estado_producto');
            }

            $producto->save();
        }
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}