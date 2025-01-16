<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Conta Patrimônio</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @if ($errors->any())
        <div class="d-flex justify-content-center">
            <x-toast type="danger">
                <ul class="list-unstyled">
                    <i class="bi bi-exclamation-circle text-danger"></i>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </x-toast>
        </div>
    @endif
    <div class="container vh-100 d-flex justify-content-center align-items-center">

        <div class="col-lg-4 col-10">
            <div class="text-center">
                <i class="bi bi-boxes fs-1"></i>
                <h1 class="h3">Conta Patrimônio</h1>
            </div>

            <div class="text-center mb-4">
                <h3 class="text-muted">Fazer login</h3>
                <hr>
            </div>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <x-input id="email" name="email" type="email" placeholder="Email" with-old-value required>
                    Email
                </x-input>
                <x-input id="password" name="senha" type="password" placeholder="Senha" required>
                    Senha
                </x-input>
                <div class="d-flex justify-content-center mb-3">
                    <a href="#" class="text-decoration-none">Esqueceu a senha?</a>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-100">Log in</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
