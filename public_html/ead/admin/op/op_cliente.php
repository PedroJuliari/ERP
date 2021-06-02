<?php
require("../include/config.php");
require("../include/crud.php");
require("../include/biblio.php");
$url1 = URL_ADMIN."admin/index.php?link=3";
$url2 = URL_ADMIN."admin/index.php?link=2";

@$acao                 = $_POST["acao"];
@$id                = $_POST["id"];
$data =date("Y-m-d");

@$txt_cliente          = $_POST["txt_cliente"];
@$txt_email            = $_POST["txt_email"];


$dados = array(
"nome"       => trim( $_POST["txt_cliente"] ),
"endereco"      => trim( $_POST["txt_endereco"]),
"bairro"        => trim( $_POST["txt_bairro"]),
"cidade"        => trim( $_POST["txt_cidade"]),
"cep"           => trim( $_POST["txt_cep"]),
"estado"        => trim( $_POST["txt_uf"]),
"cpf"           => trim( $_POST["txt_cpf"]),
"rg"            => trim( $_POST["txt_rg"]),
"fone"      	=> trim( $_POST["txt_fone"]),
"celular"       => trim( $_POST["txt_celular"]),
"email "        => trim( $_POST["txt_email"]),
"senha "        => trim( $_POST["txt_senha"]),
"ativo_cliente"         => trim( $_POST["txt_ativo"]),
"data_cadastro" => $data
				   
);
if(($txt_cliente)&&($txt_email)){
	if($acao=="Cadastrar"){
		$cliente = consultar("cliente","email='$txt_email'");
		if(!$cliente)
		$op = inserir("cliente",$dados);
	else
		echo"<META HTTP-EQUIV='REFRESH' CONTENT ='0;URL=$url1'>
		<script>alert('Operação não realizada ja cadastrado')</script>";
		
	}
	if($acao=="Editar"){
		$op = alterar("cliente",$dados , "id_cliente=$id");
		
	}
	if($acao=="Excluir"){
		$op = deletar("cliente", "id_cliente=$id");
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