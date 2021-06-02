<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Usuario;
use app\models\Permissao;

class UsuarioController extends Controller{ 

public function __construct(){
	

	if(!isset($_SESSION["usuariologado"])){
	header("location:".URL_BASE."login");
	
	}
	$this->id_usuario =$_SESSION["usuariologado"]->id_usuario;
	$this->objPermissao = new Permissao();
	$this->alias_tabela ="usuarios";
	$this->objPermissao->temPermissao($this->id_usuario,$this->alias_tabela, 'listar');
}

    
   public function index(){
     $objUsuario = new Usuario();
	 
	 $pesquisa = new\stdClass();
	 $pesquisa->login = null;
	 $pesquisa->email = null;
	  
	  $pg         = isset($_GET["pg"])?$_GET["pg"]:0;
	  $total      = $objUsuario->getTotal($pesquisa);
	  $lpp        = 10;
	  $inicio     = $pg* $lpp;
	  
	  $dados ["usuarios"]      = $objUsuario->filtro($pesquisa,$inicio,$lpp);
	  $dados["pg"]            =  $pg;
	  $dados["paginas"]       = ceil($total/$lpp-1);
	  $dados["total"]         = $total;
	  $dados["url"]           = URL_BASE."usuario/?";
	  $dados["view"]          = "Usuario/Index";
       $this->load("template", $dados);
   } 
   

   
   public function create(){ 
       $this->objPermissao->temPermissao($this->id_usuario,$this->alias_tabela, 'inserir');   
       $dados["view"] = "Usuario/Create-Edit";
       $this->load("template", $dados);
   }
   
   
   
   public function edit($id_usuario=null){
	   $this->objPermissao($this->id_usuario,$this->alias_tabela,'editar');
       $objUsuario = new Usuario();
	   
	   if(!$id_usuario){
		   header("location:".URL_BASE."usuario");
		   
	   }else{
		   $usuario = $objUsuario->getUsuario($id_usuario);
	   }
	   if(!$usuario){
		   header("location:".URL_BASE."usuario");
	   }

       $dados["usuario"]  = $usuario;
       $dados["view"]       = "Usuario/Create-Edit";
       $this->load("template", $dados);
   }
  
  //metodo deleta usuario validaçoes
  
  public function delet($id_usuario=null){
	  
	  
       $objUsuario = new Usuario();
	   
	   if(!$id_usuario){
		   header("location:".URL_BASE."usuario");
		   
	   }else{
		   $usuario = $objUsuario->getUsuario($id_usuario);
	   }
	   if(!$usuario){
		   header("location:".URL_BASE."usuario");
	   }

       $dados["usuario"]  = $usuario;
       $dados["view"]       = "Usuario/Delete";
       $this->load("template", $dados);
   }
   
   //metodo salvar com evitando o sqlinjectiom
   
   public function salvar(){ 
	 
	 $objUsuario = new Usuario();
	   
	   $usuario = new \stdClass();
	   
$usuario->id_usuario      = isset ($_POST["id_usuario"])?strip_tags(filter_input(INPUT_POST,"id_usuario")):null;
$usuario->login           = isset ($_POST["login"])?strip_tags(filter_input(INPUT_POST,"login")):null;
$usuario->senha           = isset ($_POST["senha"])?strip_tags(filter_input(INPUT_POST,"senha")):null;
$usuario->email           = isset ($_POST["email"])?strip_tags(filter_input(INPUT_POST,"email")):null;
$usuario->administrador   = isset ($_POST["administrador"])?strip_tags(filter_input(INPUT_POST,"administrador")):null;
	   
	  if($usuario->id_usuario){
		  $objUsuario->editar($usuario);
	  }else{
		  $objUsuario->inserir($usuario);
	  }
	  header("location:".URL_BASE."usuario");
   }
   
   //excluir usuario
   
   public function excluir($id_usuario){
	   
	   $objUsuario = new Usuario();
	   $objUsuario->excluir($id_usuario);
	   header("location:".URL_BASE."usuario");
	   
	   
   }

}
