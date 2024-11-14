<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Conta Patrimônio') }}</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <div class="d-flex">
        <!-- Barra Lateral -->
        <x-sidebar />

        <div class="flex-grow-1">
            <!-- Topo -->
            <x-header />

            <!-- Conteúdo Principal -->
            <main class="container my-4">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>