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
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_medicamento');
            $table->decimal('total');
            $table->decimal('quantidade');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_medicamento')->references('id')->on('medicamentos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendas');
    }
};
