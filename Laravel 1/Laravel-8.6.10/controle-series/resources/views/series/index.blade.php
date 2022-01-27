@extends('layout')


@section('cabecalho')
Séries Vistas
@endsection


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@section('conteudo')


    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif


<div class="container">
    <a href="{{ route('criar_serie') }}" class="btn btn-dark mb-3">Adicionar Série</a>
</div>

<div class="container bg-success bg-gradient">
    <ul class="list-group">
        @foreach ($series as $serie)
        
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $serie->nome }}

            <form method="post" action="/series/{{ $serie->id }}"
            onsubmit="return confirm('Confirme remover a série {{ addslashes($serie->nome) }} ?')">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </form>
        </li>

        @endforeach
    </ul>
</div>
@endsection