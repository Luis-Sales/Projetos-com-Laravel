@extends('layout.app')

@section('title','Editar Registro')


<a href="/" class="btn btn-danger col-12">Exit</a>

<form class="container mt-5" action="{{route('update', ['id'=>$jogos->id])}}" method="POST">

    @csrf
    @method('PUT')

    <h1>Deseja editar {{$jogos->nome}} ?</h1>
    <div class="form-group ">
        
      <label for="exampleInputEmail1">Nome do jogo</label>
      <input type="text" class="form-control" name="nome" placeholder="Nome" value=" {{$jogos->nome}}">
      
    </div>

    <div class="form-group">
        <label for="categoria">Categoria</label>
        <input type="text" class="form-control" name="categoria" placeholder="Categoria" value="{{$jogos->categoria}}">
      </div>

    <div class="form-group">
        <label for="ano_criacao">Ano de Criação</label>
        <input type="date" class="form-control" name="ano_criacao" placeholder="Ano de sua Criação"  value="{{$jogos->ano_criacao}}">
    </div>

    <div class="form-group">
        <label for="valor">Valor</label>
        <input type="number" class="form-control" name="valor" placeholder="Valor" value="{{$jogos->valor}}">
      </div>


    <button type="submit" class="btn btn-primary mt-3">Salvar</button>
    
  </form>

  

@section('Content')

@endsection