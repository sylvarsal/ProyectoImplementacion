<?php

namespace App\Filament\Resources\EstadoProductos\Pages;

use App\Filament\Resources\EstadoProductos\EstadoProductoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEstadoProductos extends ListRecords
{
    protected static string $resource = EstadoProductoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
