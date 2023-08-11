<div class="main">
	<link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <form action="{{ route('livros.store') }}" method="POST" enctype="multipart/form-data" class="form-columns">
        @csrf

        <div class="column">
            <label for="titulo">Título do Livro:</label>
            <input type="text" name="titulo" required>

            <label for="autor">Autor:</label>
            <input type="text" name="autor" required>

            <label for="numero_paginas">Número de Páginas:</label>
            <input type="number" name="numero_paginas" required>

            <label for="editora">Editora:</label>
            <input type="text" name="editora">
        </div>

        <div class="column">
            <label for="isbn">ISBN:</label>
            <input type="text" name="isbn" required>

            <label for="genero">Gênero:</label>
            <input type="text" name="genero">

            <label for="idioma">Idioma:</label>
            <input type="text" name="idioma" required>

            <label for="ano_publicacao">Ano de Publicação:</label>
            <input type="number" name="ano_publicacao" max="9999" required>

            <label for="capa">Capa do Livro:</label>
            <input type="file" name="imagem" accept="image/*">

            <label for="nome_imagem">Nome da Imagem:</label>
            <input type="text" name="nome_imagem">

            <label for="sinopse">Sinopse:</label>
            <textarea name="sinopse" cols="30" rows="10"></textarea>
        </div>

        <x-button type="submit">Cadastrar Livro</x-button>
    </form>
</div>
