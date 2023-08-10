<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    <link rel="stylesheet" href="{{ asset('css/basic.css') }}">
</head>
<body>
    
    @component('components.navbar')
		
	@endcomponent

	@yield('content')

</body>
</html>
