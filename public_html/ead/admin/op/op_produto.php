<?php
require("../include/config.php");
require("../include/crud.php");
require("../include/biblio.php");
$url1 = URL_ADMIN."admin/index.php?link=13";
$url2 = URL_ADMIN."admin/index.php?link=7";

@$acao                 = $_POST["acao"];
@$id                   = $_POST["id"];
@$txt_produto          = $_POST["txt_produto"];



$dados = array(
"produto"        => trim( $_POST["txt_produto"] ),
"descricao"      => trim( $_POST["txt_descricao"]),
"url_pagamento"  => trim( $_POST["txt_urlpg"]),
"ativo"          => trim( $_POST["txt_ativo"])

				   
);
if($txt_produto){
	if($acao=="Cadastrar"){
		$produto = consultar("produto","produto='$txt_produto'");
		if(!$produto)
		$op = inserir("produto",$dados);
	else
		echo"<META HTTP-EQUIV='REFRESH' CONTENT ='0;URL=$url1'>
		<script>alert('Operação não realizada ja cadastrado')</script>";
		
	}
	if($acao=="Editar"){
		$op = alterar("produto",$dados , "id_produto=$id");
		
	}
	if($acao=="Excluir"){
		$op = deletar("produto", "id_produto=$id");
	}
	if($op){
		echo"<META HTTP-EQUIV='REFRESH' CONTENT ='0;URL=$url2'>
		<script>alert('Operação realizada')</script>";
	}else{
		echo"<META HTTP-EQUIV='REFRESH' CONTENT ='0;URL=$url1'>
		<script>alert('Operação não realizada')</script>";
		
	}
}
?>