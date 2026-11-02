<?php

namespace App\Filament\Resources\EstadoPedidos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EstadoPedidosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_estado_pedido')
                    ->label('#')
                    ->sortable(),
                TextColumn::make('nombre_estado')
                    ->label('Estado del Pedido')
                    ->searchable()
                    ->badge()
                    ->color(fn (string $state): string => match (strtolower($state)) {
                        'recibido' => 'gray',
                        'en preparación' => 'warning',
                        'listo' => 'info',
                        'entregado' => 'success',
                        'cancelado' => 'danger',
                        default => 'primary',
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
