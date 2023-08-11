@extends('layouts.app', ['pageTitle' => 'Cadastrar Livro'])
@section('content')

<div class="container">
	
	<h1>Cadastro de Novo Livro</h1>

	<x-forms.cadastro-livro></x-forms.cadastro-livro>
	{{-- <x-forms.form></x-forms.form> --}}


</div>

@endsection
