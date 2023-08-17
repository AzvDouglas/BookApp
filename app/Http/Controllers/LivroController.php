<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use GuzzleHttp\Client;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros = Livro::all();
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
     * @param string $titulo
     * @return array
     */
    public function buscar(string $titulo)
    {
        try {
            $client = new Client();
            $response = $client->request('GET', 'https://www.googleapis.com/books/v1/volumes?q=' . urlencode($titulo));
    
            $responseData = json_decode($response->getBody()->getContents(), true);
            
            if (isset($responseData['items'])) {
                $volumes = $responseData['items'];
    
                $livros = [];
                foreach ($volumes as $volume) {
                    $livro = [
                        'titulo' => $volume['volumeInfo']['title'] ?? 'Título desconhecido',
                        'isbn' => $volume['volumeInfo']['industryIdentifiers'][0]['identifier'] ?? '',
                        'autor' => $volume['volumeInfo']['authors'][0] ?? 'Autor desconhecido',
                        'ano' => $volume['volumeInfo']['publishedDate'] ?? 'Ano desconhecido',
                        'paginas' => $volume['volumeInfo']['pageCount'] ?? 0,
                        'descricao' => $volume['volumeInfo']['description'] ?? 'Descrição indisponível',
                        'editora' => $volume['volumeInfo']['publisher'] ?? 'Editora desconhecida',
                        'capa' => $volume['volumeInfo']['imageLinks']['thumbnail'] ?? null,
                    ];
                    array_push($livros, $livro);
                }
                return $livros;
            } else {
                return [];
            }
        } catch (\Exception $e) {
            // Tratar erros de requisição ou resposta da API
            return [];
        }
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $livro = $request->all();
        $livros = $this->buscar($livro['titulo']);
        dd($livros);//To DO: Implementar modal para selecionar instâncias de Livro a serem persitidas no BD
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
