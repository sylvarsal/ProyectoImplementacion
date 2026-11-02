<?php

namespace App\Filament\Resources\EstadoPedidos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EstadoPedidoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre_estado')
                    ->label('Nombre del Estado')
                    ->placeholder('Ingresa un estado del pedido con un maximo de 20 caracteres')
                    ->helperText('Ej: Recibido, En preparación, Listo...')
                    ->required()
                    ->maxLength(20),
            ]);
    }
}
