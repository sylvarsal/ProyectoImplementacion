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
