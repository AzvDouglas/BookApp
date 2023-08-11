@extends('layouts.app', ['pageTitle' => 'Cadastrar Livro'])
@section('content')

<div class="container">
	<div>
		<h1>Cadastro de Novo Livro</h1>
	</div>

	<x-forms.cadastro-livro></x-forms.cadastro-livro>
	{{-- <x-forms.form></x-forms.form> --}}


</div>

@endsection
