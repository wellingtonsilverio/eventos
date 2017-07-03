<?php
include 'src/wellingtonsilverio/connect.mysql.class.php';
include 'src/wellingtonsilverio/users.class.php';

$objConn = new Connect();
$objUsers = new Users($objConn);


if(isset($_POST['form-login']) && isset($_POST['ev-pass'])){
	$objUsers->login($_POST['ev-email'],$_POST['ev-pass']);
}
if(isset($_POST['term-register'])){
	if($_POST['ev-pass'] == $_POST['ev-repass']){
		if($objUsers->setUser($objUsers->populateUsers($_POST['ev-email'],$_POST['ev-pass'],$_POST['ev-name'],$_POST['ev-cpf']))){
			header('Location: login/alert-register-success');
		}
	}
}
?>
<!-- Login -->
<div class="ui grid container top-space">
	<div class="sixteen wide column top-space"><h1>FAÇA <b>SEU LOGIN</b></h1></div>
	<?php if(isset($_GET['ecid']) && $_GET['ecid'] == 'alert-register-success'){ ?>
		<div class="sixteen wide column">
			<div class="ui icon success message">
			  <i class="check circle icon"></i>
			  <i class="close icon"></i>
			  <div class="content">
			    <div class="header">
			      Você terminou seu registro!
			    </div>
			    <p>Parabens, você terminou seu registro, use as informações cadastrais para acessar a sua conta, mas lembre-se, você precisará da senha sempre que usar o site.</p>
			  </div>
			</div>
		</div>
	<?php } ?>
	<div class="eight wide column">
		<h2>JÁ TENHO CADASTRO</h2>
		<form class="ui form" method="post">
		  <div class="field">
		    <input type="text" name="ev-email" placeholder="E-mail">
		  </div>
		  <div class="field">
		    <input type="password" name="ev-pass" placeholder="Senha">
		  </div>
		  <div class="field">
		    <div class="ui checkbox">
		      <input type="checkbox" tabindex="0" class="hidden">
		      <label>Continuar logado por 7 dias</label>
		    </div>
		  </div>
		  <button class="ui right floated button" type="submit">ENTRAR</button>
		  <input type="hidden" class="hidden" name="form-login" value="true">
		  <button class="ui negative right floated basic button" type="submit">ESQUECI MINHA SENHA</button>
		</form>
	</div>
	<div class="eight wide column">
		<h2>NÃO TENHO CADASTRO</h2>
		<form class="ui form" method="post">
		  <div class="field">
		    <input type="text" name="ev-name" placeholder="Nome Completo">
		  </div>
		  <div class="field">
		    <input type="text" name="ev-email" placeholder="E-mail">
		  </div>
		  <div class="field">
		    <input type="password" name="ev-pass" placeholder="Senha nova">
		  </div>
		  <div class="field">
		    <input type="password" name="ev-repass" placeholder="Repetir senha nova">
		  </div>
		  <div class="field">
		    <input type="text" name="ev-cpf" placeholder="CPF">
		  </div>
		  <div class="field">
		  	<div class="ui checkbox">
		      <input type="checkbox" tabindex="0" class="hidden" name="term-register">
		      <label>Eu li e concordo com o <a href="">Termos de Uso</a> e <a href="">Políticas de Privacidade</a></label>
		    </div>
		  </div>
		  <button class="ui primary right floated button" type="submit">CADASTRAR</button>
		</form>
	</div>
</div>