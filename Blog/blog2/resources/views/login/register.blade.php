<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	
    <title>Document</title>
</head>
<body>
    <div class="container mt-5 p-3">

    <div class= "p-5">
              <section class="w-100 px-4 py-5">
                    <style>
                    .divider:after,
                    .divider:before {
                        content: "";
                        flex: 1;
                        height: 1px;
                        background: #eee;
                    }
                    </style>
            
                    <div class="row d-flex justify-content-center">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Imagem do telefone">
                    </div>
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

                        <h1 class="mx-auto">Criar novo usuario !</h1>

                        <form class="mt-4" action="/create" method="post">
                            @csrf

                                 <!-- Nome input -->
                                 <div class="form-outline mb-4">
                                    <label class="form-label" for="name" style="margin-left: 0px;"><font style="vertical-align: inherit;">Nome</font></label>
                                    <input type="text"  name="name" class="form-control form-control-lg" placeholder="Nome">

                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email" style="margin-left: 0px;"><font style="vertical-align: inherit;">Endereço de email</font></label>
                                    <input type="email"  name="email" class="form-control form-control-lg" placeholder="E-mail">

                                </div>
                    
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="password" style="margin-left: 0px;"><font style="vertical-align: inherit;">Senha</font></label>
                                    <input type="password"  name="password" class="form-control form-control-lg" placeholder="senha">
                                
                                </div>

                    
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-lg col-12 ">
                                    <font style="vertical-align: inherit;"> Salvar </font>
                                </button>
            

                        </form>

                            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 mt-5">

                                @if ($mensagem = Session::get('erro'))
                                    {{$mensagem}}
                                @endif

                            </div>

                            <div class="">

                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <p>{{$error}}</p><br>
                                    @endforeach      
                                @endif

                            </div>
                     </div>
                    </div>
            
                </section>
         </div>
    </div>
</body>
</html>