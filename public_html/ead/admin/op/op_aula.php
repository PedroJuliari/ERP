<?php
require("../include/config.php");
require("../include/crud.php");
require("../include/biblio.php");
$url1 = URL_ADMIN."admin/index.php?link=6";
$url2 = URL_ADMIN."admin/index.php?link=10";

@$acao              = $_POST["acao"];
@$id                = $_POST["id"];
@$titulo_aula       = $_POST["txt_titulo_aula"];



$dados = array(

"id_modulo"         => trim( $_POST["txt_id_modulo"] ),
"id_capitulo"       => trim( $_POST["txt_id_capitulo"] ),
"titulo_aula"       => trim( $_POST["txt_titulo_aula"] ),
"duracao"           => trim( $_POST["txt_duracao"]),
"embed"             => trim( $_POST["txt_embed"]),
"tipo_video"        => trim( $_POST["txt_tipo_video"]),
"descricao"         => trim( $_POST["txt_descricao"]),
"ativo_aula"        => trim( $_POST["txt_ativo_aula"])

				   
);
if($titulo_aula){
	if($acao=="Cadastrar"){
		$aula = consultar("aula","titulo_aula='$txt_titulo_aula'");
		if(!$aula)
		$op = inserir("aula",$dados);
	else
		echo"<META HTTP-EQUIV='REFRESH' CONTENT ='0;URL=$url1'>
		<script>alert('Operação não realizada ja cadastrado')</script>";
		
	}
	if($acao=="Editar"){
		$op = alterar("aula",$dados , "id_aula=$id");
		
	}
	if($acao=="Excluir"){
		$op = deletar("aula", "id_aula=$id");
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