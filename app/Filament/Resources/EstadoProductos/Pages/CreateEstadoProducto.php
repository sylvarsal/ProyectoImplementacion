<?php

namespace App\Filament\Resources\EstadoProductos\Pages;

use App\Filament\Resources\EstadoProductos\EstadoProductoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEstadoProducto extends CreateRecord
{
    protected static string $resource = EstadoProductoResource::class;
    protected static ?string $title = 'Registrar nuevo estado del producto';
    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    
    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Estado del producto creado exitosamente';
    }
}



