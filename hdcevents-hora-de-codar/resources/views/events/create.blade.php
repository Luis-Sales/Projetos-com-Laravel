@extends("layouts.main")
@section('title', 'Criar Evento')

@section("content")

    <h1>Criar Evento</h1>

    <div id="event-create-container" class="col-md-6 offset-md-3">
       
        <h1>Crie o seu Evento</h1>
            
  
        <form action="/events" method="post" enctype="multipart/form-data">           
            @csrf <!-- Sem isso o laravel nao deixa enviarmos o formulario -->
            
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="title">Evento:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
            </div>

            <div class="form-group">
                <label for="title">Date do evento:</label>
                    <input type="date" class="form-control" id="date" name="date">
            </div>

            <div class="form-group">
                <label for="title">Cidade:</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" >
            </div>

            <div class="form-group">
                <label for="title"> O evento é privado ?</label>
                <select id="private" name="private" class="form-control" >
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="title"> Descrição</label>
                    <textarea name="descricao" id="descricao" class="form-control" placeholder="O que vai acontecer no evento ?"></textarea>
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

            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>
    
@endsection