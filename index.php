<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Eventos</title>
	<base href="/eventos/">

	<!-- CSS of Semantic UI -->
	<link rel="stylesheet" type="text/css" href="src/semantic-ui/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="src/wellingtonsilverio/css/default.css">
</head>
<body>
	<!-- MENU -->
	<div class="ui top fixed massive menu">
	  <a class="item" style="background-color: orange;color: #000000;"><i class="sidebar icon"></i></a>
	  <div class="ui simple dropdown item" style="background-color: #000;color: #FFFFFF;">
	    EVENTOS
	    <i class="dropdown icon"></i>
	    <div class="menu">
	      <a href="events/1" class="item"><i class="globe icon"></i> Arte/Filme</a>
	      <a class="item"><i class="globe icon"></i> Livros/Literatura</a>
	      <a class="item"><i class="globe icon"></i> Causas</a>
	      <a class="item"><i class="globe icon"></i> Comédia</a>
	      <a class="item"><i class="globe icon"></i> Comunidade</a>
	      <a class="item"><i class="globe icon"></i> Comida/Bebida</a>
	      <a class="item"><i class="globe icon"></i> Jogos</a>
	      <a class="item"><i class="globe icon"></i> Saúde/Bem-estar</a>
	      <a class="item"><i class="globe icon"></i> Casa/Jardim</a>
	      <a class="item"><i class="globe icon"></i> Música</a>
	      <a class="item"><i class="globe icon"></i> Networking</a>
	      <a class="item"><i class="globe icon"></i> Festas/Balada</a>
	      <a class="item"><i class="globe icon"></i> Religião/Espiritualidade</a>
	      <a class="item"><i class="globe icon"></i> Compras</a>
	      <a class="item"><i class="globe icon"></i> Esportes/Recreação</a>
	      <a class="item"><i class="globe icon"></i> Teatro/Dança</a>
	      <a class="item"><i class="globe icon"></i> Outro</a>
	    </div>
	  </div>
	  <a class="item">HOME</a>
	  <a class="item">PROMOÇÕES</a>
	  <a class="item">AJUDA</a>
	  <a class="item">FALE CONOSCO</a>
	  <div class="right menu">
	    <a href="login" class="item" style="background-color: orange;color: #000000;"><i class="sign in icon"></i> Acessar minha conta</a>
	  </div>
	</div>

	<?php isset($_GET['p']) ? include 'app/'.$_GET['p'].'.php' : include 'app/login.php'; ?>


	<!-- Javascript -->
	<!-- JS of Semantic UI -->
	<script
	  src="src/jquery/jquery-3.1.1.min.js"
	  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	  crossorigin="anonymous"></script>
	<script src="src/semantic-ui/semantic.min.js"></script>

	<script>
		$(document).ready(function(){
			$('#select').dropdown();
			$('#selectSort').dropdown();
			$('.ui.checkbox').checkbox();
			$('.ui.embed').embed();
			$('.message .close')
			  .on('click', function() {
			    $(this)
			      .closest('.message')
			      .transition('fade')
			    ;
			  })
			;
		});
	</script>
</body>
</html>