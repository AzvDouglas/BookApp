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
        Schema::create('autor_livro', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('livro_id');
            $table->timestamps();

            $table->foreign('autor_id')->references('id')->on('autores')->onDelete('cascade');
            $table->foreign('livro_id')->references('id')->on('livros')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('autor_livro', function (Blueprint $table) {
            $table->dropForeign(['autor_id']);
            $table->dropForeign(['livro_id']);
        }
    );
        Schema::dropIfExists('autor_livro');
    }
};
