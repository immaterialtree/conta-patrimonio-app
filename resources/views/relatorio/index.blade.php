@extends('layouts.app')

@section('titulo', 'Relatórios')

@section('content')
    <div class="row mb-3">
        <h2>Relatórios</h2>
    </div>

    <div class="mb-3 col-5">
        <x-card-btn>
            <i class="bi bi-clipboard-data fs-2"></i>
            <h4>Relatório de contagem</h4>
            <a href="{{ route('relatorios.contagem') }}" class="stretched-link"></a>
        </x-card-btn>
    </div>

    <div class="mb-3 col-5">
        <x-card-btn>
            <i class="bi bi-clock-history fs-2"></i>
            <h4>Histórico de Movimentação de Patrimônio</h4>
            <a href="{{ route('relatorios.historico_movimentacao.form') }}" class="stretched-link"></a>
        </x-card-btn>
    </div>

    <div class="mb-3 col-5">
        <x-card-btn>
            <i class="bi bi-file-earmark-text fs-2"></i>
            <h4>Histórico de Alterações do Patrimônio</h4>
            <a href="{{ route('relatorios.patrimonio.form') }}" class="stretched-link"></a>
        </x-card-btn>
    </div>
@endsection
