<?php

namespace App\Filament\Resources\EstadoPedidos;

use App\Filament\Resources\EstadoPedidos\Pages\CreateEstadoPedido;
use App\Filament\Resources\EstadoPedidos\Pages\EditEstadoPedido;
use App\Filament\Resources\EstadoPedidos\Pages\ListEstadoPedidos;
use App\Filament\Resources\EstadoPedidos\Schemas\EstadoPedidoForm;
use App\Filament\Resources\EstadoPedidos\Tables\EstadoPedidosTable;
use App\Models\EstadoPedido;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class EstadoPedidoResource extends Resource
{
    protected static ?string $model = EstadoPedido::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|UnitEnum|null $navigationGroup = 'Configuración';

    protected static ?string $recordTitleAttribute = 'EstadoPedido';

    public static function form(Schema $schema): Schema
    {
        return EstadoPedidoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EstadoPedidosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEstadoPedidos::route('/'),
            'create' => CreateEstadoPedido::route('/create'),
            'edit' => EditEstadoPedido::route('/{record}/edit'),
        ];
    }
}    
