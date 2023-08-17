<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Autor;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ['isbn', 'titulo', 'autor', 'numero_paginas', 'idioma', 'genero', 'editora', 'sinopse', 'ano_publicacao', 'nome_imagem', 'capa'];

    public function autores()
    {
        return $this->belongsToMany(Autor::class, 'autor_livro', 'livro_id', 'autor_id');
    }


}
