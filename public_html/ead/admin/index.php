<!doctype html>
<?php 
require("include/config.php");
require("include/crud.php");
require("include/biblio.php");

abrirConexao()
?>
<html>
<head>
<meta charset="utf-8">
<title>PJULIARI</title>
	<link href="css/estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="site">
		<?php include "cabecalho.php"?>
		<div class="conteudo">
			<?php include "menu.php";?>
			<div class="lado-dir">
				<?php 

@$link = $_GET["link"];

$pag[1] = "home.php";
$pag[2] = "lst/lst-cliente.php";
$pag[3] = "frm/frm-cliente.php";
$pag[4] = "lst/lst-modulo.php";
$pag[5] = "frm/frm-modulo.php";
$pag[6] = "frm/frm-aula.php";
$pag[7] = "lst/lst-produto.php";
$pag[9] = "frm/frm-aula.php";
$pag[10] = "lst/lst-aula.php";
$pag[11] = "frm/frm-capitulo.php";
$pag[12] = "lst/lst-capitulo.php";
$pag[13] = "frm/frm-produto.php";

if(!empty($link)){
	if(file_exists($pag[$link]))
	include $pag[$link];
else
	include "home.php";
	    }else
	       include "home.php";



				?>
				
			</div>
		</div>
		<div class="rodape">
			<?php include "rodape.php"; ?>
		</div>
	</div>
</body>
</html>