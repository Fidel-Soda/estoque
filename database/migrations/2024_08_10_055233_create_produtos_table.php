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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->decimal('preco', 10, 2);
            $table->integer('quantidade_estoque')->default(0);
            $table->string('sku')->unique();
            $table->enum('status', ['ativo', 'inativo', 'descontinuado'])->default('ativo');
            $table->string('imagem')->nullable();
            $table->date('data_validade')->nullable();
            $table->decimal('peso', 10, 2)->nullable();
            $table->string('dimensoes')->nullable();
            $table->string('codigo_barras')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
