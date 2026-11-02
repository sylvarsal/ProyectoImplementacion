<?php

namespace App\Filament\Resources\EstadoPedidos\Pages;

use App\Filament\Resources\EstadoPedidos\EstadoPedidoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEstadoPedido extends EditRecord
{
    protected static string $resource = EstadoPedidoResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedSavedTitle(): ?string
    {
        return 'Estado del pedido actualizado exitosamente';
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
