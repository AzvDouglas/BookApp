@extends('layouts.app', ['pageTitle' => 'Listagem de Livros'])
@section('content')


<div class="container">
<h2>Livros</h2>
	<table>
		<thead>
			<tr>
				<th>Título</th>
				<th>Autor</th>
				<th>Gênero</th>
				<th>ISBN</th>
			</tr>
		</thead>
		<tbody>
			@foreach($livros as $livro)
			<tr>
				<td>{{ $livro->titulo }}</td>
				<td>{{ $livro->autor }}</td>
				<td>{{ $livro->genero }}</td>
				<td>{{ $livro->isbn }}</td>
				<td>
					<a href="{{ route('livros.edit', $livro->id) }}">Editar</a>
					<form action="{{ route('livros.destroy', $livro->id) }}" method="POST">
						@csrf
						@method('DELETE')
						<button type="submit">Excluir</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a href="{{ route('livros.create') }}">Novo Livro</a>
</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/livros-list.css') }}">
@endpush
