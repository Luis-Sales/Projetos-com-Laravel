@extends("layouts.main")
@section('title', 'EDITANDO ' . $event->title)

@section("content")


    <div id="event-create-container" class="col-md-6 offset-md-3">
       
        <h1>Editando {{$event->title}}</h1>
            
  
        <form action="/events/update/ {{ $event->id }}" method="post" enctype="multipart/form-data">           
           
            @csrf <!-- Sem isso o laravel nao deixa enviarmos o formulario -->
            @method('PUT')

            <div class="form-group">
                <label for="image"></label>
                <input type="file" id="image" name="image" class="form-control-file">
                <img src="/img/events/{{ $event->image }}" alt="" class="img-preview"> 
            </div>

            <div class="form-group">
                <label for="title">Evento:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento" value=" {{$event->title}}">
            </div>

            <div class="form-group">
                <label for="title">Data do evento:</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{date('Y-m-d', strtotime($event->date));}}" >
            </div>

            <div class="form-group">
                <label for="title">Cidade:</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="{{$event->cidade}}" >
            </div>

            <div class="form-group">
                <label for="title"> O evento é privado ?</label>
                <select id="private" name="private" class="form-control"  >
                    <option value="0">Não</option>
                    <option value="1" {{ $event->private == 1 ? "selected='selected'": "" }}>Sim</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="title"> Descrição</label>
                    <textarea name="descricao" id="descricao" class="form-control" >{{$event->descricao}}</textarea>
            </div>

            <div class="form-group">
                
                <label for="title"> Adicione itens de infraestrutura</label>
                <div class="form-group">
                    <input type="checkbox" name="itens[]"  value="Cadeiras"> Cadeiras                
                </div>

                <div class="form-group">
                    <input type="checkbox" name="itens[]"  value="Palco"> Palco                
                </div>
                
                <div class="form-group">
                    <input type="checkbox" name="itens[]"  value="Cerveja Gratis"> Cerveja Gratis                
                </div>

                <div class="form-group">
                    <input type="checkbox" name="itens[]"  value="Open Food"> Open Food                
                </div>

                <div class="form-group">
                    <input type="checkbox" name="itens[]"  value="Brindes"> Brindes                
                </div>
                    
            </div>

            <input type="submit" class="btn btn-primary" value="Salvar">
        </form>
    </div>
    
@endsection