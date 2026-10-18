<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle_pedido', function (Blueprint $table) {
            $table->id('id_detalle_pedido');
            $table->foreignId('id_pedido')->constrained('pedido', 'id_pedido');
            $table->foreignId('id_producto')->constrained('producto', 'id_producto');
            $table->foreignId('id_cliente')->constrained('cliente', 'id_cliente');
            $table->integer('cantidad');
            $table->decimal('precio_individual', 8,2);
            $table->decimal('subtotal', 8, 2);
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pedido');
    }
};
