<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>Document</title>
</head>
<body style="">
    <div class ="container my-3">
        <div class="mt-5">
                <form action="/criar" method="post" enctype='multipart/form-data'>
                    @csrf
                              
                    <div class="form-row">
                        <div class="mb-3">
                            <label for="image" class="form-label">Escolha uma imagen</label>
                            <input class="form-control" width="" type="file" name="image">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Titulo</label>
                        <input  type="text" class="form-control" name="titulo" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="subtitulo" class="form-label">Sub Titulo</label>
                        <input type="text" class="form-control" name="subtitulo" placeholder="O sub titulo ira aparecer na tela inicial do site">
                    </div>

                    <div class="mb-3">
                        <label for="texto" class="form-label">Texto</label>
                        <textarea class="form-control" class="shadow " name="texto" rows="3"></textarea>
                    </div>

 
                    <button type="submit" class="btn btn-primary mt-4">Salvar</button>
                </form>
        </div>
    </div>
</body>
</html>