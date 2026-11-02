<?php

namespace App\Filament\Resources\EstadoProductos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EstadoProductoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre_estado')
                    ->label('Nombre del Estado')
                    ->placeholder('Ingresa un estado del producto con un maximo de 20 caracteres.')
                    ->helperText('Ej. Disponible, Agotado')
                    ->required()
                    ->maxLength(20),
            ]);
    }
}


