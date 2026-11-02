<?php

namespace App\Filament\Resources\Clientes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ClientesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_cliente')
                    ->label('#')
                    ->sortable(),
                TextColumn::make('nombre_pila')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('primer_apellido')
                    ->label('Primer Apellido')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('segundo_apellido')
                    ->label('Segundo Apellido')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('telefono')
                    ->label('Teléfono')
                    ->searchable(),
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
