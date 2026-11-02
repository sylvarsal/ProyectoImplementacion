<?php

namespace App\Filament\Resources\Productos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Utilities\Set;

class ProductoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->label('Nombre del Producto')
                    ->required()
                    ->maxLength(20),
                Select::make('id_estado_producto')
                    ->label('Estado del Producto')
                    ->relationship('estadoProducto', 'nombre_estado')
                    ->required()
                    ->preload()
                    ->searchable(),
                TextInput::make('descripcion')
                    ->label('Descripción')
                    ->required()
                    ->maxLength(200)
                    ->columnSpanFull(),
                TextInput::make('precio')
                    ->label('Precio Individual')
                    ->numeric()
                    ->prefix('$')
                    ->required()
                    ->minValue(0),
                TextInput::make('stock')
                    ->label('Número en Existencia (Stock)')
                    ->numeric()
                    ->integer()
                    ->required()
                    ->minValue(0)
                    ->default(0)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (?string $state, Set $set): void {
                        if ($state !== null && (int) $state === 0) {
                            $set('id_estado_producto', 2);
                        } elseif ($state !== null && (int) $state > 0) {
                            $set('id_estado_producto', 1);
                        }
                    }),
            ]);
    }
}