<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Tabela;
use app\models\Acao;
use app\models\TabelaAcao;
use app\models\Permissao;

class AcaoController extends Controller{ 

public function __construct(){

	if(!isset($_SESSION["usuariologado"])){
	header("location:".URL_BASE."login");
	
	}
	$this->id_usuario =$_SESSION["usuariologado"]->id_usuario;
	$this->objPermissao = new Permissao();
	$this->alias_acao ="acao";
	//$this->objPermissao->temPermissao($this->id_acao,$this->alias_acao, 'lista');
}

    
   public function index(){
     $objAcao = new Acao();
	 
	 $pesquisa = new\stdClass();
	 $pesquisa->acao = null;

	  
	  $pg         = isset($_GET["pg"])?$_GET["pg"]:0;
	  $total      = $objAcao->getTotal($pesquisa);
	  $lpp        = 20;
	  $inicio     = $pg* $lpp;
	  
	  $dados ["acoes"]      = $objAcao->filtro($pesquisa,$inicio,$lpp);
	  $dados["pg"]            =  $pg;
	  $dados["paginas"]       = ceil($total/$lpp-1);
	  $dados["total"]         = $total;
	  $dados["url"]           = URL_BASE."acao/?";
	  $dados["view"]          = "Acao/Index";
       $this->load("template", $dados);
   } 
   

   
   public function create(){      
       $dados["view"] = "Acao/Create-Edit";
       $this->load("template", $dados);
   }
   
   
   
   public function edit($id_acao=null){
	   $this->objPermissao($this->id_acao,$this->alias_acao,'editar');
       $objAcao = new Acao();
	   
	   if(!$id_acao){
		   header("location:".URL_BASE."acao");
		   
	   }else{
		   $acao = $objAcao->getAcao($id_acao);
	   }
	   if(!$acao){
		   header("location:".URL_BASE."acao");
	   }

       $dados["acao"]  = $acao;
       $dados["view"]       = "Acao/Create-Edit";
       $this->load("template", $dados);
   }
  
  //metodo deleta acao validaçoes
  
  public function delet($id_acao=null){
	  
	  
       $objAcao = new Acao();
	   
	   if(!$id_acao){
		   header("location:".URL_BASE."acao");
		   
	   }else{
		   $acao = $objAcao->getAcao($id_acao);
	   }
	   if(!$acao){
		   header("location:".URL_BASE."acao");
	   }

       $dados["acao"]  = $acao;
       $dados["view"]       = "Acao/Delete";
       $this->load("template", $dados);
   }
   
   //metodo salvar com evitando o sqlinjectiom
   
   public function salvar(){ 
	 
	 $objAcao = new Acao();
	   
	   $acao = new \stdClass();
	   
$acao->id_acao      = isset ($_POST["id_acao"])?strip_tags(filter_input(INPUT_POST,"id_acao")):null;
$acao->acao          = isset ($_POST["acao"])?strip_tags(filter_input(INPUT_POST,"acao")):null;

	   
	  if($acao->id_acao){
		  $objAcao->editar($acao);
	  }else{
		  $objAcao->inserir($acao);
	  }
	  header("location:".URL_BASE."acao");
   }
   
   //excluir acao
   
   public function excluir($id_acao){
	   
	   $objAcao = new Acao();
	   $objAcao->excluir($id_acao);
	   header("location:".URL_BASE."acao");
	   
	   
   }

}
