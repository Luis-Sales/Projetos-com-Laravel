@extends('layouts.main')
@section ('title', 'HDC EVENTS')

@section('content')

    

    <div id="search-container" class="col-md-12">
        <h1>Busque um Evento</h1>

        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if ($search)
         <h2>Buscando por {{$search}}</h2>
        @else
            <h2>Proximos Eventos</h2>
            <p>Veja os Eventos dos proximos dias</p>        
        @endif
      
        <div id="cards-container" class="row">
            @foreach ($eventos as $evento)
                <div class="card col-md-3">
                    <img src="{{'img/events/' . $evento->image}}" alt="{{$evento->title}}">
                    <div class="card-body">
                        <div class="card-date">{{   date('d/m/Y', strtotime($evento->date)) }}</div>
                        <div class="card-title">{{$evento->title}}</div>
                        
                        <a href="/events/{{$evento->id}}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach

            @if (count($eventos) == 0 && $search)
                <p>Não foi possivel encontrar nenhum evento com {{$search}} ! <a href="/">Ver todos</a></p>

            @elseif (count($eventos) == 0)
            <p>Não há eventos disponiveis</p>

            @endif
        </div>
    </div>
        
   

@endsection 