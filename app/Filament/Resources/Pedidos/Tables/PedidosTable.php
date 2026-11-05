<?php

namespace App\Filament\Resources\Pedidos\Tables;

use App\Models\Pedido;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Actions\Action;
use App\Models\EstadoPedido;
use Filament\Notifications\Notification;

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
                    ->label('Estado')
                    ->badge()
                    ->color(fn (string $state): string => match (strtolower($state)) {
                        'recibido' => 'gray',
                        'en preparación' => 'warning',
                        'listo' => 'success',
                        'entregado' => 'info',
                        'cancelado' => 'danger',
                        default => 'primary',
                    }),

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
            ->actions([
                EditAction::make(),
                Action::make('marcar_listo')
                    ->label('Marcar Listo')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->visible(fn ($record) => strtolower($record->estadoPedido->nombre_estado) === 'en preparación')
                    ->action(function ($record) {
                        $estadoListo = EstadoPedido::where('nombre_estado', 'Listo')->first();
                        if($estadoListo) {
                            $record->update(['id_estado' => $estadoListo->id_estado_pedido]);
                Notification::make()
                    ->title('Pedido actualizado')
                    ->body('El pedido se encuentra listo para ser entregado.')
                    ->success()
                    ->send();
                        }
                    }),

                Action::make('entregar')
                    ->label('Entregar')
                    ->icon('heroicon-o-truck')
                    ->color('info')
                    ->visible(fn ($record) => strtolower($record->estadoPedido->nombre_estado) === 'listo')
                    ->action(function ($record) {
                        $estadoEntregado = EstadoPedido::where('nombre_estado', 'Entregado')->first();
                        if($estadoEntregado) {
                            $record->update(['id_estado' => $estadoEntregado->id_estado_pedido]);
                Notification::make()
                    ->title('Pedido actualizado')
                    ->body('El pedido ya está en la zona de entrega.')
                    ->success()
                    ->send();
                        }
                    }),
            ]);
    }
}