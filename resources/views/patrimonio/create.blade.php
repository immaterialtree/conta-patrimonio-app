@extends('layouts.app')

@section('content')
    <div class="card mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h2 class="card-title h4 mb-4">Criar novo patrimônio</h2>

            @include('patrimonio.partials.form', ['action' => route('patrimonios.store')])

        </div>
    </div>
@endsection