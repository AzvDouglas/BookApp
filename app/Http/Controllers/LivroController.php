<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Listar todos os livros
        $livros = Livro::all();
        //dd($livros); //TODO: Remover e substituir por uma view com a lista de livros
        return view('livros.index', ['livros' => $livros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Cadastro de um novo livro
        return view('livros.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $livro = $request->all();
        Livro::create($livro);
        return redirect()->route('livros.index');
        //dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $livro = Livro::find($id);
        return view('livros.show', ['livro' => $livro]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $livro = Livro::find($id);
        return view('livros.edit', ['livro' => $livro]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $livro = Livro::find($id);
        $livro->update($request->all());
        return redirect()->route('livros.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $livro = Livro::find($id);
        $livro->delete();
        return redirect()->route('livros.index');
    }
}
