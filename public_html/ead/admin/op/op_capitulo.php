<?php
require("../include/config.php");
require("../include/crud.php");
require("../include/biblio.php");
$url1 = URL_ADMIN."admin/index.php?link=12";
$url2 = URL_ADMIN."admin/index.php?link=11";

@$acao                 = $_POST["acao"];
@$id                   = $_POST["id"];
@$txt_capitulo         = $_POST["txt_capitulo"];



$dados = array(  
"id_modulo"        => trim( $_POST["txt_modulo"] ),
"capitulo"         => trim( $_POST["txt_capitulo"]),
"ativo_capitulo"   => trim( $_POST["txt_ativo_capitulo"])

				   
);
if($txt_capitulo){
	if($acao=="Cadastrar"){
		$capitulo = consultar("capitulo","capitulo='$txt_capitulo'");
		if(!$capitulo)
		$op = inserir("capitulo",$dados);
	else
		echo"<META HTTP-EQUIV='REFRESH' CONTENT ='0;URL=$url1'>
		<script>alert('Operação não realizada ja cadastrado')</script>";
		
	}
	if($acao=="Editar"){
		$op = alterar("capitulo",$dados , "id_capitulo=$id");
		
	}
	if($acao=="Excluir"){
		$op = deletar("capitulo", "id_capitulo=$id");
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