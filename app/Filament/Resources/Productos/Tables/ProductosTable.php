<?php

namespace App\Filament\Resources\Productos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;

class ProductosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_producto')
                    ->label('#')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('nombre')
                    ->label('Producto')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('descripcion')
                    ->label('Descripción')
                    ->searchable()
                    ->limit(45)
                    ->wrap(),
                TextColumn::make('precio')
                    ->label('Precio')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('stock')
                    ->label('Existencia')
                    ->numeric()
                    ->sortable(),
               
                    TextColumn::make('estadoProducto.nombre_estado')
                    ->label('Estado')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('id_estado_producto')
                    ->label('Filtrar por Estado')
                    ->relationship('estadoProducto', 'nombre_estado'),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make()
                    ->modalHeading('¿Estás seguro que quieres eliminar el/los producto(s)?'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->modalHeading('¿Estás seguro que quieres eliminar el/los producto(s)?'),
                ]),
            ]);
    }
}

