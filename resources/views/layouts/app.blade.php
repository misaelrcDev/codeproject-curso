<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Laravel')</title>

    {{-- CSS compilado pelo Laravel Mix --}}
    <link href="{{ mix('css/vendor.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/all.js') }}"></script>

    {{-- Se desejar, você pode adicionar outras bibliotecas aqui --}}
</head>
<body>
    {{-- Navegação --}}


    <div class="container">
        @yield('content')  {{-- Aqui será carregado o conteúdo da página que extender este layout --}}
    </div>

    {{-- Scripts --}}
</body>
</html>
