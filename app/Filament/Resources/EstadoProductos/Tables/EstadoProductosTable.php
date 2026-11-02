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
                    ->searchable()
                    ->badge()
                    ->color(fn (string $state): string => match (strtolower($state)) {
                        'disponible' => 'success',
                        'agotado' => 'danger',
                        default => 'gray',
                    }),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
