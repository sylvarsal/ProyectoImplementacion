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
        Schema::create('producto', function (Blueprint $table) {
            $table->id('id_producto');
            $table->foreignId('id_estado_producto')->constrained('estado_producto', 'id_estado_producto');
            $table->string('nombre', 20);
            $table->string('descripcion', 200);
            $table->decimal('precio', 8, 2);
            $table->integer('stock');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
