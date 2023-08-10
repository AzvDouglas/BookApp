<div>
    <form action="{{ route('livros.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="titulo">Título do Livro:</label>
        <input type="text" name="titulo" required>

        <label for="autor">Autor:</label>
        <input type="text" name="autor" required>

        <label for="ano_publicacao">Ano de Publicação:</label>
        <input type="number" name="ano_publicacao" min="1000" max="2023" required>

        <label for="imagem">Imagem:</label>
        <input type="file" name="imagem" accept="image/*">

        <x-button type="submit">Cadastrar Livro</x-button>
    </form>
</div>
