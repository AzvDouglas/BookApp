<div class="container">
    <link rel="stylesheet" href="{{ asset('css/form-cadastro.css') }}">
    <div class="form-column">
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" id="isbn" name="isbn" required>
        </div>
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" required>
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" id="autor" name="autor" required>
        </div>
        <div class="form-group">
            <label for="numero_paginas">Número de Páginas</label>
            <input type="number" id="numero_paginas" name="numero_paginas" required>
        </div>
        <div class="form-group">
            <label for="idioma">Idioma</label>
            <input type="text" id="idioma" name="idioma" required>
        </div>
    </div>
    <div class="form-column">
        <div class="form-group">
            <label for="genero">Gênero</label>
            <input type="text" id="genero" name="genero">
        </div>
        <div class="form-group">
            <label for="editora">Editora</label>
            <input type="text" id="editora" name="editora">
        </div>
        <div class="form-group">
            <label for="sinopse">Sinopse</label>
            <textarea id="sinopse" name="sinopse" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="ano_publicacao">Ano de Publicação</label>
            <input type="text" id="ano_publicacao" name="ano_publicacao">
        </div>
        <div class="form-group">
            <label for="nome_imagem">Nome da Imagem</label>
            <input type="text" id="nome_imagem" name="nome_imagem">
        </div>
        <div class="form-group">
            <label for="capa">Capa</label>
            <input type="file" id="capa" name="capa">
        </div>
    </div>
</div>
