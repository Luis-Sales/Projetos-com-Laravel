<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet"> 

        <!-- CSS BOOTSTRAP DA APLICAÇÃO-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

        <!-- CSS DA APLICAÇÃO-->
        <link rel="stylesheet" href="/css/style.css">
        
        <!-- JS DA APLICAÇÃO-->
        <script src="/js/js.js"></script>

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/icons8-cabeça-do-homem-aranha.svg" class="w-50" alt="">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-intem">
                            <a href="/" class="nav-link">Eventos</a>
                        </li>

                        <li class="nav-intem">
                            <a href="/events/create" class="nav-link">Criar Eventos</a>
                        </li>
                        @auth
                            
                        <li class="nav-intem">
                            <a href="/dashboard" class="nav-link">Meus Eventos</a>
                        </li>

                        <li class="nav-intem">
                            <form action="/logout" method="post">
                                @csrf
                                <a href="/logout" class="nav-link" onclick="event.preventDefault(); 
                                this.closest('form').submit();">Sair</a>
                            </form>
                        </li>
                        @endauth

                        @guest
                            <li class="nav-intem">
                                <a href="/login/" class="nav-link">Entrar</a>
                            </li>

                            <li class="nav-intem">
                                <a href="/register/" class="nav-link">Cadastrar</a>
                            </li>
                        @endguest

                    </ul>
                </div>                
            </nav>

        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if (session('msg'))
                    <p class="msg"> {{session('msg')}} </p>                       
                    @endif

                    @yield('content')
                </div>
            </div>
        </main>
       

        <footer>
            <p>HDC EVENTS &copy: 2022</p>
        </footer>
    </body>

    {{--
        @extends("layouts.main")
        @section('title', 'Produtos')

        @section("content")
        <h1>PRODUTOS</h1>
        @endsection
    --}}
</html>
