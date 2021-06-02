<!doctype html>
<?php 
require("admin/include/config.php");
require("admin/include/crud.php");
require("admin/include/biblio.php");

abrirConexao()
?>
<html>
<head>
<meta charset="utf-8">
<title>PJULIARI</title>
	<link href="css/estilo.css" rel="stylesheet" type="text/css">
	<script src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript">
	
	$(document).ready(function()
	{
		$('dd').hide();
		$('dt a').click(function(){
			$("dd:visible").slideUp("slow");
			$(this).parent().next().slideDown("slow");
			return false;
		});
	});
	</script>
	
</head>

<body>

		<div class="site">
		<?php include "cabecalho.php"?>
		<div class="menu-topo">
		<?php include "menu-topo.php"?>
		</div>
		

	
		<div class="conteudo">
		<?php include "menu.php";?>
		
			
			<div class="lado-dir">
			<div class="plataforma">
			
		
			
<h1><a href="#" class="mod">Modulo 1</a><a href="#" class="curso">Curso 1</a><a href="#" class="video">Video 1</a></h1>

	<div class="base-home">
<h2>BEM VINDO(A)</h2>	

<div class="Video">
<iframe width="675" height="474" src=""frameborder="0" allowfullscreen></iframe>
</div>
<div class="basebtn">
<center><a href="#" class="anterior">|Anterior|</a>
<a href="#" class="proximo">|Proximo|</a></center>
</div>
<div class="basecont">
<div class="cont">
<h3>Conteudo teorico</h3>	
</div>
<div class="downloads">
<h3>Downloads</h3>	
</div>
</div>
		</div>
			
				</div>
					
				
				
			</div>
		</div>
		<div class="rodape">
			<?php include "rodape.php"; ?>
		</div>
	</div>
</body>
</html>