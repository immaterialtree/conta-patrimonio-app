@extends('layouts.comissao')

@section('title', 'Informações do Patrimônio')

@section('content')
    <div class="container mt-3">
        <div class="card mb-3 mx-auto">
            <div class="card-body">
                <div class="mb-3 row">
                    <strong>Número de Tombamento</strong>
                    <p>{{ $patrimonio->codigo }}</p>
                </div>

                <div class="mb-3 row">
                    <strong>Descrição</strong>
                    <p>{{ $patrimonio->descricao }}</p>
                </div>

                <div class="mb-3 row">
                    <strong>Setor</strong>
                    <p>{{ $patrimonio->departamento->titulo }}</p>
                </div>

                <div class="mb-3 row">
                    <strong>Classificação</strong>
                    <p>{{ $patrimonio->classificacao->titulo }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
