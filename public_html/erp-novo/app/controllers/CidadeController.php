<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Cidade;
use app\models\Permissao;
use app\models\Estado;

class cidadeController extends Controller{ 

public function __construct(){

	if(!isset($_SESSION["usuariologado"])){
	header("location:".URL_BASE."usuario");
	
	}
	$this->id_usuario =$_SESSION["usuariologado"]->id_usuario;
	$this->objPermissao = new Permissao();
	$this->alias_tabela ="cidade";
	//$this->objPermissao->temPermissao($this->id_cidade,$this->alias_tabela, 'lista');
}

    
   public function index(){
      $objcidade = new Cidade();
	  $objEstado = new Estado();
	 
	 $pesquisa = new\stdClass();
	 $pesquisa->nome_cidade = null;
	 $pesquisa->ibge_cidade = null;
	 $pesquisa->id_estado = null;
	
	  
	  $pg         = isset($_GET["pg"])?$_GET["pg"]:0;
	  $total      = $objcidade->getTotal($pesquisa);
	  $lpp        = 10;
	  $inicio     = $pg* $lpp;
	  
	  $dados ["cidades"]      = $objcidade->filtro($pesquisa,$inicio,$lpp);
	  $dados ["estados"]      = $objEstado->lista();
	  $dados["pg"]            =  $pg;
	  $dados["paginas"]       = ceil($total/$lpp-1);
	  $dados["total"]         = $total;
	  $dados["url"]           = URL_BASE."cidade/?";
	  $dados["view"]          = "Cidade/Index";
       $this->load("template", $dados);
   } 
     public function filtro(){
      $objcidade = new Cidade();
	  $objEstado = new Estado();
	 
	 $pesquisa = new\stdClass();
	 $pesquisa->nome_cidade = isset($_GET["nome_cidade"])?strip_tags(filter_input(INPUT_GET,"nome_cidade")):null;
	 $pesquisa->ibge_cidade = isset($_GET["ibge_cidade"])?strip_tags(filter_input(INPUT_GET,"ibge_cidade")):null;
	 $pesquisa->id_estado   = isset($_GET["id_estado"])?strip_tags(filter_input(INPUT_GET,"id_estado")):null;
	
	  
	  $pg         = isset($_GET["pg"])?$_GET["pg"]:0;
	  $total      = $objcidade->getTotal($pesquisa);
	  $lpp        = 10;
	  $inicio     = $pg* $lpp;
	  
	  $dados ["cidades"]      = $objcidade->filtro($pesquisa,$inicio,$lpp);
	  $dados ["estados"]     = $objEstado->lista();
	  $dados["pg"]            =  $pg;
	  $dados["pesquisa"]      = $pesquisa;
	  $dados["paginas"]       = ceil($total/$lpp-1);
	  $dados["total"]         = $total;
	  $dados["url"]           = URL_BASE."cidade/?nome_cidade=".$pesquisa->nome_cidade."&ibge_cidade=".$pesquisa->ibge_cidade;
	  $dados["view"]          = "Cidade/Index";
       $this->load("template", $dados);
   } 

   //create
   public function create(){
       $objEstado = new Estado();
	   $objcidade = new Cidade();
       $dados ["estados"]  = $objEstado->lista();
       $dados ["cidades"]  = $objcidade->lista();	   
       $dados["view"] = "Cidade/Create-Edit";
       $this->load("template", $dados);
   }
   
   
   
   public function edit($id_cidade=null){
	   //$this->objPermissao($this->id_cidade,$this->alias_tabela,'editar');
       $objcidade = new Cidade();
	   
	   if(!$id_cidade){
		   header("location:".URL_BASE."cidade");
		   
	   }else{
		   $cidade = $objcidade->getcidade($id_cidade);
	   }
	   if(!$cidade){
		   header("location:".URL_BASE."cidade");
	   }

       $dados["cidade"]    = $cidade;
       $dados["view"]       = "Cidade/Create-Edit";
       $this->load("template", $dados);
   }
  
  //metodo deleta cidade validaçoes
  
  public function delet($id_cidade=null){
	  
	  
       $objcidade = new Cidade();
	   
	   if(!$id_cidade){
		   header("location:".URL_BASE."cidade");
		   
	   }else{
		   $cidade = $objcidade->getcidade($id_cidade);
	   }
	   if(!$cidade){
		   header("location:".URL_BASE."cidade");
	   }

       $dados["cidade"]  = $cidade;
       $dados["view"]       = "Cidade/Delete";
       $this->load("template", $dados);
   }
   
   //metodo salvar com evitando o sqlinjectiom
   
   public function inserir(){ 
	 
	 $objcidade = new Cidade();
	 $objEstado = new Estado();
	   
	   $cidade = new \stdClass();
	   
$cidade->id_cidade   = isset($_POST["id_cidade"])?strip_tags(filter_input(INPUT_POST,"id_cidade")):null;	   
$cidade->id_estado   = isset($_POST["id_estado"])?strip_tags(filter_input(INPUT_POST,"id_estado")):null;
$cidade->nome_cidade = isset($_POST["nome_cidade"])?strip_tags(filter_input(INPUT_POST,"nome_cidade")):null;
$cidade->ibge_cidade = isset($_POST["ibge_cidade"])?strip_tags(filter_input(INPUT_POST,"ibge_cidade")):null;
   
	  if($cidade->id_cidade){
		  $objcidade->editar($cidade);
	  }else{
		  $objcidade->salvar($cidade);
	  }
	  header("location:".URL_BASE."cidade");
   }
   
   //excluir cidade
   
   public function excluir($id_cidade){
	   
	   $objcidade = new Cidade();
	   $objcidade->excluir($id_cidade);
	   header("location:".URL_BASE."cidade");
	   
	   
   }

}
