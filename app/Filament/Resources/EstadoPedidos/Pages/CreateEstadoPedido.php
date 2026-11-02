<?php

namespace App\Filament\Resources\EstadoPedidos\Pages;

use App\Filament\Resources\EstadoPedidos\EstadoPedidoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEstadoPedido extends CreateRecord
{
    protected static string $resource = EstadoPedidoResource::class;
    protected static ?string $title = 'Registrar nuevo estado del pedido';
    protected static bool $canCreateAnother = false;

        protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    
    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Estado del pedido creado exitosamente';
    }
}


