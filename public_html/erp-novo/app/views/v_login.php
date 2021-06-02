<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Sistema ERP - siscom</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device=width, initial-scale=1">		
		<!--css-->
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/grade.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style.css">
		
		<!--codigos-->
		<script src="<?php echo URL_BASE ?>assets/js/jquery-3.3.1.min.js"></script>
		<script src="<?php echo URL_BASE ?>assets/js/js-funcoes.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<!--font icones-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		
		
	</head>
	
	<body class="base-login position-relative">
			<div class=" px-0">
				<div class="col-4 bg-login-1 m-auto">	
						<h2 class="pb-3">LOGIN</h2>
						<?php
						
						 echo $erro;
						 
						 
						 ?>
						
						
						<form action="<?php echo URL_BASE ?>/login" method="post">
							<div class="mb-1">
							<input type="text" name="txt_login" placeholder="Login" class="form-campo">	
							</div>	
							<div class="mb-1">							
							<input type="password" name="txt_senha" placeholder="Senha" class="form-campo">
							</div>
							<input type="submit" name="" value="Entrar" class="btn btn-verde width-100 btn-medio mt-2 m-auto">
						</form>
						<a href="#janela" rel="modal" class="link-azul mt-4 d-block"><small>Esqueci minha senha</small></a>
				</div>
			</div>
		
		<div class="window" id="janela">
				<div class="bg-login-2 radius-4">
					<span class="fechar"><i class="fas fa-window-close"></i></span>
					<h2>Esqueci minha senha</h2>
						<small>Digite seu email abaixo para recuperar sua senha</small>
					<form action="" method="">
						<label>Login</label>
						<input type="text" name="" placeholder="Digite seu email" class="form-campo">
						<input type="submit" name="" value="Entrar" class="btn btn-azul mt-2 m-auto">
					</form>
				</div>
		</div>
		
			<div id="mascara"></div>
	</body>
</html>