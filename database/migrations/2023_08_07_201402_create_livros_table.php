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
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('isbn')->unique();
            $table->string('titulo');
            $table->string('autor');
            $table->integer('numero_paginas');
            $table->string('idioma');
            $table->string('genero')->nullable();
            $table->string('editora')->nullable();
            $table->text('sinopse')->nullable();
            $table->year('ano_publicacao')->nullable();
            $table->string('nome_imagem')->nullable(); // Campo para armazenar o nome da imagem
            $table->string('capa')->nullable(); // Campo para armazenar o caminho da imagem
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
