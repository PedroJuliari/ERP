<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Estado;
use app\models\Permissao;

class EstadoController extends Controller{ 

public function __construct(){

	if(!isset($_SESSION["usuariologado"])){
	header("location:".URL_BASE."usuario");
	
	}
	$this->id_estado =$_SESSION["usuariologado"]->id_usuario;
	$this->objPermissao = new Permissao();
	$this->alias_tabela ="estado";
	//$this->objPermissao->temPermissao($this->id_estado,$this->alias_tabela, 'lista');
}

    
   public function index(){
     $objEstado = new Estado();
	 
	 $pesquisa = new\stdClass();
	 $pesquisa->nome_estado = null;
	 $pesquisa->uf_estado = null;
	 $pesquisa->codigo_estado = null;
	  
	  $pg         = isset($_GET["pg"])?$_GET["pg"]:0;
	  $total      = $objEstado->getTotal($pesquisa);
	  $lpp        = 10;
	  $inicio     = $pg* $lpp;
	  
	  $dados ["estados"]      = $objEstado->filtro($pesquisa,$inicio,$lpp);
	  $dados["pg"]            =  $pg;
	  $dados["paginas"]       = ceil($total/$lpp-1);
	  $dados["total"]         = $total;
	  $dados["url"]           = URL_BASE."estado/?";
	  $dados["view"]          = "Estado/Index";
       $this->load("template", $dados);
   } 
   

   
   public function create(){      
       $dados["view"] = "Estado/Create-Edit";
       $this->load("template", $dados);
   }
   
   
   
   public function edit($id_estado=null){
	   //$this->objPermissao($this->id_estado,$this->alias_tabela,'editar');
       $objEstado = new Estado();
	   
	   if(!$id_estado){
		   header("location:".URL_BASE."estado");
		   
	   }else{
		   $estado = $objEstado->getEstado($id_estado);
	   }
	   if(!$estado){
		   header("location:".URL_BASE."estado");
	   }

       $dados["estado"]    = $estado;
       $dados["view"]       = "Estado/Create-Edit";
       $this->load("template", $dados);
   }
  
  //metodo deleta estado validaçoes
  
  public function delet($id_estado=null){
	  
	  
       $objEstado = new Estado();
	   
	   if(!$id_estado){
		   header("location:".URL_BASE."estado");
		   
	   }else{
		   $estado = $objEstado->getEstado($id_estado);
	   }
	   if(!$estado){
		   header("location:".URL_BASE."estado");
	   }

       $dados["estado"]  = $estado;
       $dados["view"]       = "Estado/Delete";
       $this->load("template", $dados);
   }
   
   //metodo salvar com evitando o sqlinjectiom
   
   public function salvar(){ 
	 
	 $objEstado = new Estado();
	   
	   $estado = new \stdClass();	
$estado->id_estado         = isset($_POST["id_estado"])?strip_tags(filter_input(INPUT_POST,"id_estado")):null;	   
$estado->nome_estado       = isset($_POST["nome_estado"])?strip_tags(filter_input(INPUT_POST,"nome_estado")):null;
$estado->uf_estado         = isset($_POST["uf_estado"])?strip_tags(filter_input(INPUT_POST,"uf_estado")):null;
$estado->codigo_estado     = isset($_POST["codigo_estado"])?strip_tags(filter_input(INPUT_POST,"codigo_estado")):null;

	   
	  if($estado->id_estado){
		  $objEstado->editar($estado);
	  }else{
		  $objEstado->inserir($estado);
	  }
	  header("location:".URL_BASE."estado");
   }
   
   //excluir estado
   
   public function excluir($id_estado){
	   
	   $objEstado = new Estado();
	   $objEstado->excluir($id_estado);
	   header("location:".URL_BASE."estado");
	   
	   
   }

}
