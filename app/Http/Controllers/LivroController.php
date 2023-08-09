<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    //
    public function index()
    {
        $livros = Livro::all();
        //Retorna a view index com o array de livros paginados
        return view('livros.index', ['livros' => $livros]);
    }
}
