<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Categoria;

class CategoriaController extends Controller{ 

public function __construct(){

	if(!isset($_SESSION["usuariologado"])){
	header("location:".URL_BASE."login");
	
	}
	$this->id_usuario =$_SESSION["usuariologado"]->id_usuario;
	//$this->objPermissao = new Permissao();
	$this->alias_tabela ="categoria";
	//$this->objPermissao->temPermissao($this->id_categoria,$this->alias_tabela, 'lista');
}

    
   public function index(){
     $objCategoria = new Categoria();
	 
	 $pesquisa = new\stdClass();
	 $pesquisa->categoria = null;
	 $pesquisa->ativo_categoria = null;
	  
	  $pg         = isset($_GET["pg"])?$_GET["pg"]:0;
	  $total      = $objCategoria->getTotal($pesquisa);
	  $lpp        = 10;
	  $inicio     = $pg* $lpp;
	  
	  $dados ["categorias"]      = $objCategoria->filtro($pesquisa,$inicio,$lpp);
	  $dados["pg"]            =  $pg;
	  $dados["paginas"]       = ceil($total/$lpp-1);
	  $dados["total"]         = $total;
	  $dados["url"]           = URL_BASE."categoria/?";
	  $dados["view"]          = "Categoria/Index";
       $this->load("template", $dados);
   } 
   

   
   public function create(){      
       $dados["view"] = "Categoria/Create-Edit";
       $this->load("template", $dados);
   }
   
   
   
   public function edit($id_categoria=null){
	   //$this->objPermissao($this->id_categoria,$this->alias_tabela,'editar');
       $objCategoria = new Categoria();
	   
	   if(!$id_categoria){
		   header("location:".URL_BASE."categoria");
		   
	   }else{
		   $categoria = $objCategoria->getCategoria($id_categoria);
	   }
	   if(!$categoria){
		   header("location:".URL_BASE."categoria");
	   }

       $dados["categoria"]  = $categoria;
       $dados["view"]       = "Categoria/Create-Edit";
       $this->load("template", $dados);
   }
  
  //metodo deleta categoria validaçoes
  
  public function delet($id_categoria=null){
	  
	  
       $objCategoria = new Categoria();
	   
	   if(!$id_categoria){
		   header("location:".URL_BASE."categoria");
		   
	   }else{
		   $categoria = $objCategoria->getCategoria($id_categoria);
	   }
	   if(!$categoria){
		   header("location:".URL_BASE."categoria");
	   }

       $dados["categoria"]  = $categoria;
       $dados["view"]       = "Categoria/Delete";
       $this->load("template", $dados);
   }
   
   //metodo salvar com evitando o sqlinjectiom
   
   public function salvar(){ 
	 
	 $objCategoria = new Categoria();
	   
	   $categoria = new \stdClass();
	   
$categoria->id_categoria       = isset ($_POST["id_categoria"])?strip_tags(filter_input(INPUT_POST,"id_categoria")):null;
$categoria->categoria          = isset ($_POST["categoria"])?strip_tags(filter_input(INPUT_POST,"categoria")):null;
$categoria->ativo_categoria    = isset ($_POST["ativo_categoria"])?strip_tags(filter_input(INPUT_POST,"ativo_categoria")):null;

	  if($categoria->id_categoria){
		  $objCategoria->editar($categoria);
	  }else{
		  $objCategoria->inserir($categoria);
	  }
	  header("location:".URL_BASE."categoria");
   }
   
   //excluir categoria
   
   public function excluir($id_categoria){
	   
	   $objCategoria = new Categoria();
	   $objCategoria->excluir($id_categoria);
	   header("location:".URL_BASE."categoria");
	   
	   
   }

}
