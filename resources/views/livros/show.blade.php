{{-- <--Mostrar todas as informações do livro--> --}}
@extends('layouts.app', ['pageTitle' => 'Detalhes do Livro'])

@section('content')

<div class="container">
	{{-- <--Título--> --}}
	<h2>{{ $livro->titulo }}</h2>

	{{-- <--Autor--> --}}
	<p><strong>Autor:</strong> {{ $livro->autor }}</p>

	{{-- <--Gênero--> --}}
	<p><strong>Gênero:</strong> {{ $livro->genero }}</p>

	{{-- <--ISBN--> --}}
	<p><strong>ISBN:</strong> {{ $livro->isbn }}</p>

	{{-- <--Data de Criação--> --}}
	<p><strong>Data de Criação:</strong> {{ $livro->created_at }}</p>

	{{-- <--Data de Atualização--> --}}
	<p><strong>Data de Atualização:</strong> {{ $livro->updated_at }}</p>

	{{-- <--Botão para voltar para a página de listagem--> --}}
	<a href="{{ route('livros.index') }}">
		<x-button id="voltar">Voltar</x-button>
	</a>
</div>
