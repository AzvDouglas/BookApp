<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ['isbn', 'titulo', 'autor', 'numero_paginas', 'idioma', 'genero', 'editora', 'sinopse', 'ano_publicacao', 'nome_imagem', 'capa'];

}
