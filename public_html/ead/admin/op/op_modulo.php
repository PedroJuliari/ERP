<?php
require("../include/config.php");
require("../include/crud.php");
require("../include/biblio.php");
$url1 = URL_ADMIN."admin/index.php?link=4";
$url2 = URL_ADMIN."admin/index.php?link=5";

@$acao                 = $_POST["acao"];
@$id                   = $_POST["id"];
@$txt_modulo         = $_POST["txt_modulo"];



$dados = array(  
"titulo_modulo"         => trim( $_POST["txt_modulo"] ),
"ativo_modulo"     => trim( $_POST["txt_ativo_modulo"])

				   
);
if($txt_modulo){
	if($acao=="Cadastrar"){
		$capitulo = consultar("modulo","titulo_modulo='$txt_modulo'");
		if(!$capitulo)
		$op = inserir("modulo",$dados);
	else
		echo"<META HTTP-EQUIV='REFRESH' CONTENT ='0;URL=$url1'>
		<script>alert('Operação não realizada ja cadastrado')</script>";
		
	}
	if($acao=="Editar"){
		$op = alterar("modulo",$dados , "id_modulo=$id");
		
	}
	if($acao=="Excluir"){
		$op = deletar("modulo", "id_modulo=$id");
	}
	if($op){
		echo"<META HTTP-EQUIV='REFRESH' CONTENT ='0;URL=$url1'>
		<script>alert('Operação realizada')</script>";
	}else{
		echo"<META HTTP-EQUIV='REFRESH' CONTENT ='0;URL=$url2'>
		<script>alert('Operação não realizada')</script>";
		
	}
}
?>