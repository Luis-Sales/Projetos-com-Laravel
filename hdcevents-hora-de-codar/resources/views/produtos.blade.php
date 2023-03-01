@extends("layouts.main")
@section('title', 'Produtos')

@section("content")
    <h1>PRODUTOS {{$busca}}</h1>

    @if ($busca != "")

        <p>O Usuario busca por {{$busca }}</p>
        
    @endif

@endsection
