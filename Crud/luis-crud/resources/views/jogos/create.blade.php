@extends('layout.app')

@section('title','Novo Registro')

<a href="/" class="btn btn-danger col-12">Exit</a>

<form class="container mt-5" action="/create/store" method="POST">

    @csrf
    @method('post')

    <h1>Crie um novo Gamer !</h1>
    <div class="form-group ">
        
      <label for="exampleInputEmail1">Nome do jogo</label>
      <input type="text" class="form-control" name="nome" placeholder="Nome">
      
    </div>

    <div class="form-group">
        <label for="categoria">Categoria</label>
        <input type="text" class="form-control" name="categoria" placeholder="Categoria">
      </div>

    <div class="form-group">
        <label for="ano_criacao">Ano de Criação</label>
        <input type="date" class="form-control" name="ano_criacao" placeholder="Ano de sua Criação">
    </div>

    <div class="form-group">
        <label for="valor">Valor</label>
        <input type="number" class="form-control" name="valor" placeholder="Valor">
      </div>


    <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
    
  </form>

  

@section('Content')

@endsection