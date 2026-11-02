<?php

namespace App\Filament\Resources\EstadoProductos\Pages;

use App\Filament\Resources\EstadoProductos\EstadoProductoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEstadoProducto extends EditRecord
{
    protected static string $resource = EstadoProductoResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedSavedTitle(): ?string
    {
        return 'Estado del producto actualizado exitosamente';
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
