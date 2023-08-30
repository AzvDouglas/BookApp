@extends('layouts.app', ['pageTitle' => 'Sistema de Gerenciamento de Livros'])

@section('content')
<div class="container" x-data="{ open: true, formOpen: false }">
    <h1 x-text="formOpen ? 'Cadastro de Novo Livro' : 'Sistema de Gerenciamento de Livros'"></h1>

    <div class="main">
        <a href="/livros">
            <button x-show="open && !formOpen">Consultar Livros</button>
        </a>
    
        <div>
            <button @click="formOpen = !formOpen" x-show="open && !formOpen">Cadastrar Livro</button>
        </div>
        
        <a href="/autores">
            <button class="light" x-show="open && !formOpen">Consultar Autores</button>
        </a>

        <a href="/autores/cadastro">
            <button class="light" x-show="open && !formOpen">Cadastrar Autor</button>
        </a>

    </div>

    <div x-show="formOpen"  x-transition.duration.500ms>
        <x-forms.cadastro-livro></x-forms.cadastro-livro>
        <button @click="formOpen = !formOpen">Fechar Formulário</button>
    </div>
</div>
@endsection
