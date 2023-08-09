<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento de Livros</title>
    <link rel="stylesheet" href="{{ asset('css/basic.css') }}">
</head>
<body>
	@component('component.navbar')
		
	@endcomponent

	<div class="container">
		<h1>Sistema de Gerenciamento de Livros</h1>
    
		<a href="/livros">
			<button>Consultar Livros</button>
		</a>
		
		<a href="/livros/cadastrar">
			<button>Cadastrar Livro</button>
		</a>
	</div>

</body>
</html>
