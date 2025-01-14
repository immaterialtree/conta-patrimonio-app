@extends('layouts.app')

@section('titulo', 'Contagem')

@section('content')

    <div class="right_col" role="main">
        <div class="mb-3">
            <div class="row">
                <h1>Contagem</h1>
            </div>
        </div>
        <!-- Cartão de Nova Contagem -->
        <div class="col-md-4 mb-3">
            <div class="card border-0 shadow-sm text-center p-4 h-100" style="border-radius: 8px;">
                <i class="bi bi-clipboard-check" style="font-size: 2rem;"></i>
                <h5 class="card-title mt-2">Nova Contagem</h5>
                <a href="{{ route('contagens.create') }}" class="stretched-link"></a>
            </div>
        </div>

        <span class="badge badge-primary">Primary</span>
        <div class="col-md-10">
            <div class="card shadow-sm border-0 p-3 h-100">
                <h5 class="card-title">Contagens</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Data de Início</th>
                            <th>Data de Fim</th>
                            <th>Criado por</th>
                            <th>Status</th>
                            <th>Acões</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contagens as $contagem)
                            <tr>
                                <td>{{ $contagem['criado_em'] }}</td>
                                <td>{{ $contagem['finalizado_em'] }}</td>
                                <td>{{ $contagem->usuarioCriador->nome }}</td>
                                <td>
                                    <span class="badge text-bg-secondary">{{ $contagem['status'] }}</span>
                                </td>
                                <td><a class="btn btn-primary" href="{{ route('contagens.show', $contagem) }}">Ver</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
