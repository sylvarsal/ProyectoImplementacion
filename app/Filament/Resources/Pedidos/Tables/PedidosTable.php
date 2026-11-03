<?php

namespace App\Filament\Resources\Pedidos\Tables;

use App\Models\Pedido;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PedidosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_pedido')
                    ->label('N.º')
                    ->sortable(),

                TextColumn::make('cliente')
                    ->label('Cliente')
                    ->state(fn (Pedido $record) => $record->detallePedido->first()?->cliente?->nombre_pila),

                TextColumn::make('estadoPedido.nombre_estado')
                    ->label('Estado'),

                TextColumn::make('fecha_hora')
                    ->label('Fecha y hora')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),

                TextColumn::make('total')
                    ->label('Total')
                    ->money('MXN')
                    ->sortable(),
            ])
            ->defaultSort('fecha_hora', 'desc')
            ->recordActions([
                EditAction::make(),
            ]);
    }
}