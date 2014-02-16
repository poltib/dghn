<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>{{{ $title }}} | DGHN</title>
    {{ HTML::style('css/styles.css'); }}
    <link rel="shortcut icon" type="image/png" href="img/logo2.png" />
</head>
<body>
	<div class="container">
		@if (Session::has('message'))
			<div class="flash alert">
				<p>{{ Session::get('message') }}</p>
			</div>
		@endif
	</div>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
		<header>
				<div id="prim">
					<a href="{{route('home')}}" title="acceuil">
					{{ HTML::image("img/logo.png") }}
					<div class="titre">
						<h1>DGHN</h1>
						<h2>Dauphin Grâce-Hollogne Natation</h2>
					</div>
					</a>
				</div>
				<nav>
					<ul id="nav"><!-- 
						 --><li class="h">{{ link_to_route( 'home', 'Accueil' ) }}</li><!-- 
						 --><li>{{ link_to_route( 'sections.show', 'Natation', '1' ) }}</li><!-- 
						 	--><li>{{ link_to_route( 'sections.show', 'Aquagym', '2' ) }}</li>  <!-- 
						 	--><li>{{ link_to_route( 'contacts.index', 'Contact' ) }}</li>  <!-- 
						 -->@if(Auth::check())
						 	<li><a>Admin&nbsp;&darr;</a>
						 		<ul class="nav2">
						 			<li>{{ link_to_route( 'results.create', 'Ajouter un resultat' ) }}</li>  
									<li>{{ link_to_route( 'announces.create', 'Ajouter une annonce' ) }}</li> 
									<li>{{ link_to_route( 'contacts.create', 'Ajouter un contact' ) }}</li>
						 		</ul>
						 	</li>
						 	<li><a title="Deconnexion" href="{{route('logout')}}">Déconnection</a></li>
						 	@endif
					</ul>
				</nav>
		</header>
	<div class="cont">
		@yield('content')
	</div>
	<footer>
		<div class="cont">
			<section class="foot">
				<h3>Liens utiles</h3>
				<ul>
					<li><a href="http://www.ffbn.be/" title="Fédération Francophone Belge de Natation" target=_blank>FFBN</a></li>
					<li><a href="http://www.belswim.be/" title="Fédération Royale Belge de Natation" target=_blank>FRBN</a></li>
					<li><a href="http://www.fina.org/" title="Fédération Internationale de Natation Amateur" target=_blank>FINA</a></li>
					
				</ul>
			</section>
			<section class="foot">
				<h3>Informations</h3>
				<ul>
					<li>{{ link_to_route( 'contacts.index', 'Contact' ) }}</li>
					<li>{{ link_to_route( 'contacts.index', 'La piscine' ) }}</li>
					<li><a href="{{route('login')}}">admin</a></li>
				</ul>
			</section>
			<section class="foot">
				<h3>Sponsors</h3>
				<ul class="sponsors">
					<li>{{ HTML::image("img/Sponsor_BlueLife.JPG") }}</li>
					<li>{{ HTML::image("img/Sponsor_BlueLife.JPG") }}</li>
					<li>{{ HTML::image("img/Sponsor_BlueLife.JPG") }}</li>
				</ul>
			</section>
		</div>
	</footer>
</body>
</html>