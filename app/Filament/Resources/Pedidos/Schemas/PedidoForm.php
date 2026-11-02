<?php

namespace App\Filament\Resources\Pedidos\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PedidoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('id_estado')
                    ->required()
                    ->numeric(),
                DateTimePicker::make('fecha_hora')
                    ->required(),
                TextInput::make('total')
                    ->required()
                    ->numeric(),
            ]);
    }
}
