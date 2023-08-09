@extends('layouts.app', ['pageTitle' => 'Sistema de Gerenciamento de Livros'])
@section('content')

<div class="container">
	<h1>Sistema de Gerenciamento de Livros</h1>

	<a href="/livros">
		<button>Consultar Livros</button>
	</a>

	<a href="/livros/cadastrar">
		<button>Cadastrar Livro</button>
	</a>
</div>

@endsection
