<?php

namespace App\Filament\Resources\Clientes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ClienteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre_pila')
                    ->label('Nombre(s)')
                    ->required()
                    ->maxLength(50),
                TextInput::make('primer_apellido')
                    ->label('Primer Apellido')
                    ->required()
                    ->maxLength(50),
                TextInput::make('segundo_apellido')
                    ->label('Segundo Apellido')
                    ->required()
                    ->maxLength(50),
                TextInput::make('telefono')
                    ->label('Teléfono')
                    ->tel()
                    ->required()
                    ->length(10)
                    ->regex('/^[0-9]{10}$/')
                    ->validationMessages([
                        'regex' => 'El teléfono debe contener únicamente 10 dígitos numéricos.',
                        'length' => 'El teléfono debe tener exactamente 10 dígitos.',
                    ]),
            ]);
    }
}