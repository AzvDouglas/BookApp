<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    <link rel="stylesheet" href="{{ asset('css/basic.css') }}">
    @stack('styles')
</head>
<body>

    <div class="container">
        <header>
            @component('components.navbar')
            @endcomponent
        </header>
    
        <main>
            @yield('content')
        </main>
    </div>

</body>
</html>
