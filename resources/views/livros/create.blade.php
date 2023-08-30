@extends('layouts.app', ['pageTitle' => 'Cadastrar Livro'])
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2>Livro Preenchido pelo Usuário</h2>
            <div class="card">
                @if(isset($livros[0]['capa']))
                <img src="{{ $livros[0]['capa'] }}" class="card-img-top img-fluid mx-auto d-block" alt="Capa do Livro" style="max-width: 120px;">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $livros[0]['titulo'] }}</h5>
                    <p class="card-text">Autor: {{ $livros[0]['autor'] }}</p>
                    <p class="card-text">Ano de Publicação: {{ $livros[0]['ano_publicacao'] }}</p>
                    <!-- Outras informações do livro -->
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <h2>Opções de Livros</h2>
            <form action="{{ route('livros.store')}}" method="post">
                @csrf
                <div class="row">
                    @foreach($livros as $index => $livro)
                    @if($index !== 0)
                    <div class="col-md-4 mb-4">
                        <div class="card card-checkbox">
                            <input type="checkbox" name="livros_selecionados[]" value="{{ $index }}" class="card-check-input">
                            <div class="card-body">
                                @if(isset($livro['capa']))
                                <img src="{{ $livro['capa'] }}" class="card-img-top img-fluid float-left" alt="Capa do Livro" style="max-width: 120px;">
                                @endif
                                <h5 class="card-title">{{ $livro['titulo'] }}</h5>
                                <p class="card-text">{{ $livro['autor'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Salvar Livros Selecionados</button>
            </form>
        </div>
    </div>
</div>
<style>
    .card-checkbox {
        cursor: pointer;
        border: 2px solid transparent; /* Remova a borda padrão */
    }
    .card-checkbox:hover {
        border-color: #ccc; /* Adicione uma borda ao passar o mouse para indicar a seleção */
    }
    .card-check-input {
        position: absolute;
        opacity: 0;
        z-index: -1;
    }
    .selected {
        border: 2px solid var(--tecnovix-light);
        background-color: #f0f8ff; /* Cor de fundo do destaque */
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const cardCheckInputs = document.querySelectorAll(".card-check-input");
    
        cardCheckInputs.forEach(function(input) {
            const card = input.closest(".card");
    
            card.addEventListener("click", function() {
                input.checked = !input.checked;
                card.classList.toggle("selected");
            });
        });
    });
    </script>
    
@endsection
