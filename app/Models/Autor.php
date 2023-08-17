<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Livro;

class Autor extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'email', 'cidade', 'estado', 'pais'];

    public function livros()
    {
        return $this->belongsToMany(Livro::class, 'autor_livro', 'autor_id', 'livro_id');
    }
}
