<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Unidade;

class UnidadeController extends Controller{ 

public function __construct(){

	if(!isset($_SESSION["usuariologado"])){
	header("location:".URL_BASE."login");
	
	}
	$this->id_usuario =$_SESSION["usuariologado"]->id_usuario;
	//$this->objPermissao = new Permissao();
	$this->alias_tabela ="unidade";
	//$this->objPermissao->temPermissao($this->id_unidade,$this->alias_tabela, 'lista');
}

    
   public function index(){
     $objUnidade = new Unidade();
	 
	 $pesquisa = new\stdClass();
	 $pesquisa->unidade = null;
	 $pesquisa->abrev = null;
	  
	  $pg         = isset($_GET["pg"])?$_GET["pg"]:0;
	  $total      = $objUnidade->getTotal($pesquisa);
	  $lpp        = 10;
	  $inicio     = $pg* $lpp;
	  
	  $dados ["unidades"]      = $objUnidade->filtro($pesquisa,$inicio,$lpp);
	  $dados["pg"]            =  $pg;
	  $dados["paginas"]       = ceil($total/$lpp-1);
	  $dados["total"]         = $total;
	  $dados["url"]           = URL_BASE."unidade/?";
	  $dados["view"]          = "Unidade/Index";
       $this->load("template", $dados);
   } 
   

   
   public function create(){      
       $dados["view"] = "Unidade/Create-Edit";
       $this->load("template", $dados);
   }
   
   
   
   public function edit($id_unidade=null){
	   //$this->objPermissao($this->id_unidade,$this->alias_tabela,'editar');
       $objUnidade = new Unidade();
	   
	   if(!$id_unidade){
		   header("location:".URL_BASE."unidade");
		   
	   }else{
		   $unidade = $objUnidade->getUnidade($id_unidade);
	   }
	   if(!$unidade){
		   header("location:".URL_BASE."unidade");
	   }

       $dados["unidade"]  = $unidade;
       $dados["view"]       = "Unidade/Create-Edit";
       $this->load("template", $dados);
   }
  
  //metodo deleta unidade validaçoes
  
  public function delet($id_unidade=null){
	  
	  
       $objUnidade = new Unidade();
	   
	   if(!$id_unidade){
		   header("location:".URL_BASE."unidade");
		   
	   }else{
		   $unidade = $objUnidade->getUnidade($id_unidade);
	   }
	   if(!$unidade){
		   header("location:".URL_BASE."unidade");
	   }

       $dados["unidade"]  = $unidade;
       $dados["view"]       = "Unidade/Delete";
       $this->load("template", $dados);
   }
   
   //metodo salvar com evitando o sqlinjectiom
   
   public function salvar(){ 
	 
	 $objUnidade = new Unidade();
	   
	   $unidade = new \stdClass();
	   
$unidade->id_unidade      = isset ($_POST["id_unidade"])?strip_tags(filter_input(INPUT_POST,"id_unidade")):null;
$unidade->unidade           = isset ($_POST["unidade"])?strip_tags(filter_input(INPUT_POST,"unidade")):null;
$unidade->abrev          = isset ($_POST["abrev"])?strip_tags(filter_input(INPUT_POST,"abrev")):null;
   
	  if($unidade->id_unidade){
		  $objUnidade->editar($unidade);
	  }else{
		  $objUnidade->inserir($unidade);
	  }
	  header("location:".URL_BASE."unidade");
   }
   
   //excluir unidade
   
   public function excluir($id_unidade){
	   
	   $objUnidade = new unidade();
	   $objUnidade->excluir($id_unidade);
	   header("location:".URL_BASE."unidade");
	   
	   
   }

}
