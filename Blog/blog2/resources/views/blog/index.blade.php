<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html> 
	<head>
		<title>Verti by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />

		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	
	</head>
	<body class="is-preload homepage">

		@if(session('mensagem'))
			<div class="alert alert-success">
				<p>{{session('mensagem')}}</p>
			</div>
			
		@endif

		 

		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<h1>Verti</h1>
								<span>Discover the world here</span>
							</div>

						<!-- Nav -->
							<nav id="nav"class="navbar ">
								<ul>
									<li class="current"><a href="index.html">Bem Vindo</a></li>
									@guest
										<li> <a href="/login">Login</a> </li>					
									    <li> <a href="/register">Registrar</a> </li> 
									@endguest
									<li><a href="#noticias">Noticías</a></li>
									<li><a href="right-sidebar.html">Contato</a></li>
									@auth<li><a href="/createnoticia">Criar</a></li>@endauth
									<li>
									  <form action="/" method="get" class="d-flex" role="search">
										@csrf
										<input class="form-control me-2 mt-3" id="search" name="search" type="search" placeholder="Procurar" aria-label="Search">
									  </form>
									</li>

									@auth
										<li>
											<form action="/logout" method="POST" class="d-flex" >
												@csrf
											<a href="/logout" class="" onclick="event.preventDefault();
																				this.closest('form').submit();">
																				Sair
											</a>
											</form>
										</li>	
									@endauth	


								</ul>
							</nav>



					</header>
				</div>




@guest
				<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="col-7 col-12-medium">
								<h2>Quer anunciar no Verti ?</h2>
								<p>Ao anunciar em nosso site, você levara seu produto ao mundo.</p>
							</div>
							<div class="col-5 col-12-medium">
								<ul>
									<li><a href="#" class="button large icon solid fa-arrow-circle-right">Ok vamos lá</a></li>
									<li><a href="#quemsomos" class="button alt large icon solid fa-question-circle">Mais informações</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
@endguest

@auth
					<!-- Banner -->
					<div id="banner-wrapper">
						<div id="banner" class="box container">
							<div class="row">
								<div class="col-7 col-12-medium">
									<h2>Bem vindo <span style="color: #10A0D5">{{ Auth::user()->name }}</span></h2>
									<p>Ao anunciar em nosso site, você levara seu produto ao mundo.</p>
								</div>
								<div class="col-5 col-12-medium">
									<ul>
										<li><a href="#" class="button large icon solid fa-arrow-circle-right">Ok vamos lá</a></li>
										<li><a href="#quemsomos" class="button alt large icon solid fa-question-circle">Mais informações</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
@endauth


<section id="noticias">
				<h1 class="text-center mt-5"> PRINCIPAIS NOTÍCIAS</h1>

			<!-- Features -->


				<div id="features-wrapper ">
					<div class="container ">
						<div class="row">
							@if ($search)
							<h2>Buscando por {{$search}} :</h2>
								<a href="/">Ver todos !</a>
						   @endif

						@foreach($blog as $blog)
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">


										<a href="#" class="image featured"><img  style="max-height: 250px" src="{{url("storage/{$blog->image}")}}" alt="" ></a>
										<div class="inner">
											<header>
												<h2>{{$blog->titulo}}</h2>
												
												<p></p>
											</header>
											<p>{{$blog->subtitulo}}</p>
										</div>
									@guest
										<div class="d-flex justify-content-center p-2">
											<form action="/login" method="get">
												<button type="submit" class="btn btn-info">Ver mais</button>
											</form>										
										</div>
									@endguest	

									@auth
										<div class="d-flex justify-content-center p-2">
											<form action="/noticia/{{$blog->id}}" method="get">
												<button type="submit" class="btn btn-success">Ver mais</button>
											</form>
										
										</div>
									@endauth

									</section>

									
							</div>

						@endforeach

						</section


</section>

			<div class="d-flex justify-content-center">
									<nav aria-label="Page navigation example">
										<ul class="pagination">
										
										<div >
												{{$blogs->links()}}
										</div>
										
										</ul>
									</nav>
			</div>
<section id="quemsomos">
							</div>
						</div>
					</div>
				</div>

			<!-- Main -->
		
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<div id="sidebar">
										<section class="widget thumbnails">
											<h3>Discover the world here</h3>
											<div class="grid">
												<div class="row gtr-50">
													<div class="col-6"><a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a></div>
													<div class="col-6"><a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a></div>
													<div class="col-6"><a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a></div>
													<div class="col-6"><a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a></div>
												</div>
											</div>
											
										</section>
									</div>

							</div>
							<div class="col-8 col-12-medium imp-medium">

								<!-- Content -->
									<div id="content">
										<section class="last">
											<h2>Ola nós somos a Verti !</h2>
											<p>Ola a  <strong>Verti</strong>, surgiu no ano de 2022 com a intenção de levar a verdade ao mundo na era digital</a>.
											com a intenção de ajudar trazer confiança novamente. Ja que todos os dias somos bombardeados</a>, com milhões de noticias e nem sempre sabemos se todas são verdadeiras (E como você sabe que a <strong>VERTI</strong> esta falando a verdade ? )</p>
											<p>A verti e formada por uma equipe totalmente profissional, com times técnicos para levar a verdade até você, alem disso todas as nossas noticias e anúncios são equipados com materiais para que você possa ver, e tirar sua propiar conclusão sobre determinado assunto você deseja anunciar conosco ? clique no botão abaixo.</p>
											<a href="#" class="button icon solid fa-arrow-circle-right">Quero ser VERTI</a>
										</section>
									</div>

							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>Random Stuff</h3>
										<ul class="style2">
											<li><a href="#">Etiam feugiat condimentum</a></li>
											<li><a href="#">Aliquam imperdiet suscipit odio</a></li>
											<li><a href="#">Sed porttitor cras in erat nec</a></li>
											<li><a href="#">Felis varius pellentesque potenti</a></li>
											<li><a href="#">Nullam scelerisque blandit leo</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>Random Stuff</h3>
										<ul class="style2">
											<li><a href="#">Etiam feugiat condimentum</a></li>
											<li><a href="#">Aliquam imperdiet suscipit odio</a></li>
											<li><a href="#">Sed porttitor cras in erat nec</a></li>
											<li><a href="#">Felis varius pellentesque potenti</a></li>
											<li><a href="#">Nullam scelerisque blandit leo</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>Random Stuff</h3>
										<ul class="style2">
											<li><a href="#">Etiam feugiat condimentum</a></li>
											<li><a href="#">Aliquam imperdiet suscipit odio</a></li>
											<li><a href="#">Sed porttitor cras in erat nec</a></li>
											<li><a href="#">Felis varius pellentesque potenti</a></li>
											<li><a href="#">Nullam scelerisque blandit leo</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Contact -->
									<section class="widget contact last">
										<h3>Contact Us</h3>
										<ul>
											<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
										</ul>
										<p>1234 Fictional Road<br />
										Nashville, TN 00000<br />
										(800) 555-0000</p>
									</section>

							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>



		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>