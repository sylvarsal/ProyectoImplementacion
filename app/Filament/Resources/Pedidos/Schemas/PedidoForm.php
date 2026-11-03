<?php

namespace App\Filament\Resources\Pedidos\Schemas;

use App\Filament\Resources\Pedidos\PedidoResource;
use App\Models\Cliente;
use App\Models\Producto;
use Filament\Actions\Action;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Model;

class PedidoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([

            Select::make('id_cliente')
                    ->label('Cliente')
                    ->options(fn () => Cliente::all()
                        ->mapWithKeys(fn ($c) => [
                            $c->id_cliente => trim("{$c->nombre_pila} {$c->primer_apellido} {$c->segundo_apellido}"),
                        ])
                        ->all())
                    ->searchable()
                    ->required()
                    ->dehydrated(false)

                    ->afterStateHydrated(function (Select $component, ?Model $record) {
                        if ($record) {
                            $component->state($record->detallePedido()->value('id_cliente'));
                        }
                    }),

                Select::make('id_estado')
                    ->label('Estado')
                    ->relationship('estadoPedido', 'nombre_estado')
                    ->required()
                    ->visibleOn('edit'),

                DateTimePicker::make('fecha_hora')
                    ->label('Fecha y hora')
                    ->native(false)
                    ->seconds(false)
                    ->displayFormat('d/m/Y H:i')
                    ->disabled()
                    ->dehydrated(false)
                    ->visibleOn('edit'),

                TextInput::make('total')
                    ->label('Total')
                    ->prefix('$')
                    ->disabled()
                    ->dehydrated(false), 

                Repeater::make('detallePedido')
                    ->label('Productos del pedido')
                    ->relationship()
                    ->columns(4)
                    ->columnSpanFull()
                    ->minItems(1)
                    ->disabled(fn (string $operation) => $operation === 'edit')
                    ->defaultItems(1)
                    ->addActionLabel('Agregar producto')
                    ->live()
                    ->afterStateUpdated(fn (Get $get, Set $set) => self::actualizarTotal($get, $set))
                    ->deleteAction(fn (Action $action) => $action->after(
                        fn (Get $get, Set $set) => self::actualizarTotal($get, $set)
                    ))

                    ->mutateRelationshipDataBeforeCreateUsing(
                        fn (array $data, $livewire) => PedidoResource::datosDetalle($data, $livewire->data['id_cliente'] ?? null)
                    )
                    ->mutateRelationshipDataBeforeSaveUsing(
                        fn (array $data, $livewire) => PedidoResource::datosDetalle($data, $livewire->data['id_cliente'] ?? null)
                    )
                    ->schema([
                        Select::make('id_producto')
                            ->label('Producto')
                            ->options(fn () => Producto::pluck('nombre', 'id_producto'))
                            ->disableOptionWhen(fn (string $value): bool => (Producto::find($value)?->stock ?? 0) <= 0)
                            ->searchable()
                            ->required()
                            ->live()
                            ->afterStateUpdated(function ($state, Get $get, Set $set) {
                                $precio = Producto::find($state)?->precio ?? 0;
                                $set('precio_individual', $precio);
                                $set('subtotal', round($precio * (int) $get('cantidad'), 2));
                            }),

                        TextInput::make('cantidad')
                            ->label('Cantidad')
                            ->numeric()
                            ->default(1)
                            ->minValue(1)
                            ->maxValue(fn (Get $get) => Producto::find($get('id_producto'))?->stock)
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (Get $get, Set $set) {
                                $precio = Producto::find($get('id_producto'))?->precio ?? 0;
                                $set('subtotal', round($precio * (int) $get('cantidad'), 2));
                            }),

                        TextInput::make('precio_individual')
                            ->label('Precio')
                            ->prefix('$')
                            ->disabled()
                            ->dehydrated(false),

                        TextInput::make('subtotal')
                            ->label('Subtotal')
                            ->prefix('$')
                            ->disabled()
                            ->dehydrated(false),
                    ]),
            ]);
    }

    public static function actualizarTotal(Get $get, Set $set): void
    {
        $total = PedidoResource::calcularTotal($get('detallePedido') ?? []);
        $set('total', number_format($total, 2, '.', ''));
    }
}