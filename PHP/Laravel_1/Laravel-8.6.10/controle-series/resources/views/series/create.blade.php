@extends('layout')


@section('cabecalho')
Adicionar Série
@endsection

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        
@section('conteudo')
<form method="POST">
    <!-- Para funcionar o post, é necessário que se use @csrf dentro do formulário, pois é um critério de verificação do Laravel -->
    @csrf
    <div class="form-group mb-4 mt-4">
        <label for="nomeSerie" class="mb-2">Nome da Série :</label>
        <input type="text" class="form-control form-control-lg" id="nomeSerie" name="NomeDaSerie" placeholder="The Witcher" >
    </div>

    <button class="btn btn-primary">Adicionar</button>
</form>

@endsection