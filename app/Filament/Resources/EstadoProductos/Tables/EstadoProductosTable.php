<?php

namespace App\Filament\Resources\EstadoProductos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EstadoProductosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_estado_producto')
                    ->label('#')
                    ->sortable(),
                TextColumn::make('nombre_estado')
                    ->label('Estado del Producto')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([])
            ->toolbarActions([])
            ->recordUrl(null);
    }
}
