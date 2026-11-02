<?php

namespace App\Filament\Resources\EstadoProductos;

use App\Filament\Resources\EstadoProductos\Pages\CreateEstadoProducto;
use App\Filament\Resources\EstadoProductos\Pages\EditEstadoProducto;
use App\Filament\Resources\EstadoProductos\Pages\ListEstadoProductos;
use App\Filament\Resources\EstadoProductos\Schemas\EstadoProductoForm;
use App\Filament\Resources\EstadoProductos\Tables\EstadoProductosTable;
use App\Models\EstadoProducto;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class EstadoProductoResource extends Resource
{
    protected static ?string $model = EstadoProducto::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|UnitEnum|null $navigationGroup = 'Configuración';

    protected static ?string $recordTitleAttribute = 'EstadoProducto';

    public static function form(Schema $schema): Schema
    {
        return EstadoProductoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EstadoProductosTable::configure($table);
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
            'index' => ListEstadoProductos::route('/'),
            'create' => CreateEstadoProducto::route('/create'),
            'edit' => EditEstadoProducto::route('/{record}/edit'),
        ];
    }
}