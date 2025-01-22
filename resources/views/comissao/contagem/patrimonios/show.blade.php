@extends('layouts.comissao', ['voltarPara' => route('comissao.contagem.patrimonios.index', [$contagem, $departamento])])

@section('title', 'Contagem de Patrimônio')

@section('content')
    <div class="container mt-3">
        @if ($contagem->patrimonioStatus($patrimonio) == PatrimonioStatus::NAO_LIDO)
            <form action="{{ route('comissao.contagem.patrimonios.store', [$contagem, $departamento, $patrimonio]) }}"
                method="POST" class="mb-3">
                @csrf
                <input type="hidden" name="patrimonio_encontrado" value="true">
                <button type="submit" class="btn btn-outline-primary">Marcar como encontrado</button>
            </form>
        @endif

        <div class="card mb-3 mx-auto">
            <div class="card-body">

                <form action="{{ route('comissao.contagem.patrimonios.update', [$contagem, $departamento, $patrimonio]) }}"
                    method="POST">
                    @method('PUT')
                    @csrf

                    <div class="mb-3 row">
                        <strong>Número de Tombamento</strong>
                        <p>{{ $patrimonio->codigo }}</p>
                    </div>

                    <div class="mb-3 row">
                        <strong>Descrição</strong>
                        <p>{{ $patrimonio->descricao }}</p>
                    </div>

                    <div class="mb-3 row">
                        <strong>Departamento</strong>
                        <p>{{ $patrimonio->departamento->titulo }}</p>
                    </div>

                    <div class="mb-3 row">
                        <strong>Classificação</strong>
                        <p>{{ $patrimonio->classificacao->titulo }}</p>
                    </div>

                    <div class="form-check mb-4">
                        <input type="checkbox" id="nao_encontrado" name="nao_encontrado" class="form-check-input"
                            value="1" data-bs-toggle="collapse" data-bs-target="#collapseClassificacaoProposta">
                        <label for="nao_encontrado" class="form-check-label">Patrimônio não encontrado</label>
                    </div>

                    <div class="form-group mb-3 row collapse show" id="collapseClassificacaoProposta">
                        <label for="classificacao_proposta" class="form-label"><strong>Sugerir nova
                                Classificação</strong></label>
                        <select id="classificacao_proposta" name="classificacao_proposta_id" class="form-select">
                            <option value="" @selected(is_null($oldClassificacaoProposta))>Escolha uma classificação</option>
                            @foreach (ClassificacaoEnum::cases() as $classificacao)
                                <option value="{{ $classificacao->getId() }}" @selected($oldClassificacaoProposta == $classificacao)>
                                    {{ $classificacao }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
