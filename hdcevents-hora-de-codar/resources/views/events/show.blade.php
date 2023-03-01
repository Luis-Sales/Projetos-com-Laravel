@extends("layouts.main")
@section('title', $event->title)

@section("content")

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-fluid">
            </div>

            <div id="info-container" class="col-md-6">
                <h1>{{$event->title}}</h1>
                <p class="event-city"><ion-icon class="location-outline"></ion-icon>{{$event->cidade}}</p>
                <p class="events-participants"> {{ count($event->users) }}</p>
                <p class="events-participants"> {{$eventOwner['name']}}</p>

                <form action="/events/join/{{$event->id}}" method="POST">
                    @csrf
                    <a href="/events/join/{{$event->id}}" class="btn btn-primary" id="event-submit"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        Confirmar Presença
                    </a>
                </form>

                <h3 class="mt-3">O Evento conta com :</h3>
                <ul id="itens-list">
                    @foreach ($event->itens as $item)
                    <li><span>{{$item}}</span></li>                      
                    @endforeach

                </ul>
            </div>
            <div class="col-md-12 mt-3" id="description-container">
                <h3>Sobre o Evento</h3>
                <p class="event-description">{{$event->descricao}}</p>
            </div>
        </div>
    </div>

@endsection