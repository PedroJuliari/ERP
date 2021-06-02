<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Tabela;
use app\models\Acao;
use app\models\TabelaAcao;
use app\models\Permissao;

class TabelaController extends Controller{ 

public function __construct(){

	if(!isset($_SESSION["usuariologado"])){
	header("location:".URL_BASE."login");
	
	}
	$this->id_usuario =$_SESSION["usuariologado"]->id_usuario;
	$this->objPermissao = new Permissao();
	$this->alias_tabela ="tabela";
	//$this->objPermissao->temPermissao($this->id_tabela,$this->alias_tabela, 'lista');
}

    
   public function index(){
     $objTabela = new Tabela();
	 //$objTabelaAcao = new TabelaAcao();
	 
	 $pesquisa = new\stdClass();
	 $pesquisa->nome_tabela = null;

	  
	  $pg         = isset($_GET["pg"])?$_GET["pg"]:0;
	  $total      = $objTabela->getTotal($pesquisa);
	  $lpp        = 20;
	  $inicio     = $pg* $lpp;
	  
	  $dados ["tabelas"]      = $objTabela->filtro($pesquisa,$inicio,$lpp);
	  //$dados ["lista"]        = $objTabelaAcao->filtro($pesquisa,$inicio,$lpp);
	  $dados["pg"]            =  $pg;
	  $dados["paginas"]       = ceil($total/$lpp-1);
	  $dados["total"]         = $total;
	  $dados["url"]           = URL_BASE."tabela/?";
	  $dados["view"]          = "Tabela/Index";
       $this->load("template", $dados);
   }

//Acoes   
      public function acoes($id_tabela){

		$objAcao = new Acao();
		$objTabela = new Tabela();
		$objTabelaAcao = new TabelaAcao();
		
		if(!$id_tabela){
		   header("location:".URL_BASE."tabela");
		   
	   }else{
		   $tabela = $objTabela->getTabela($id_tabela);
	   }
	   if(!$tabela){
		   header("location:".URL_BASE."tabela");
	   }
	   $dados["tabela"]  = $tabela;
	   $dados["tabelas"]  = $objTabela->lista();
       $dados["acoes"] = $objAcao->lista();	
	   $dados["lista"] = $objTabelaAcao->getListaPorTabela($id_tabela);
       $dados["view"] = "Tabela/Acoestab";
       $this->load("template", $dados);
   }

   
   public function create(){      
       $dados["view"] = "Tabela/Create-Edit";
       $this->load("template", $dados);
   }
   
   
   
   public function edit($id_tabela=null){
	   //$this->objPermissao($this->id_tabela,$this->alias_tabela,'editar');
       $objTabela = new Tabela();
	   
	   if(!$id_tabela){
		   header("location:".URL_BASE."tabela");
		   
	   }else{
		   $tabela = $objTabela->getTabela($id_tabela);
	   }
	   if(!$tabela){
		   header("location:".URL_BASE."tabela");
	   }

       $dados["tabelas"]  = $tabela;
       $dados["view"]       = "Tabela/Create-Edit";
       $this->load("template", $dados);
   }
  
  //metodo deleta tabela validaçoes
  
  public function delet($id_tabela=null){
	  
	  
       $objTabela = new Tabela();
	   
	   if(!$id_tabela){
		   header("location:".URL_BASE."tabela");
		   
	   }else{
		   $tabela = $objTabela->getTabela($id_tabela);
	   }
	   if(!$tabela){
		   header("location:".URL_BASE."tabela");
	   }

       $dados["tabela"]  = $tabela;
       $dados["view"]       = "Tabela/Delete";
       $this->load("template", $dados);
   }
   
   //metodo salvar com evitando o sqlinjectiom
   
   public function salvar(){ 
	 
	 $objtabela = new Tabela();
	   
	   $tabela = new \stdClass();
	   
     $tabela->id_tabela             = isset ($_POST["id_tabela"])?strip_tags(filter_input(INPUT_POST,"id_tabela")):null;
     $tabela->nome_tabela           = isset ($_POST["nome_tabela"])?strip_tags(filter_input(INPUT_POST,"nome_tabela")):null;
     $tabela->ativo_tabela          = isset ($_POST["ativo_tabela"])?strip_tags(filter_input(INPUT_POST,"ativo_tabela")):null;
	   
	  if($tabela->id_tabela){
		  $objtabela->editar($tabela);
	  }else{
		  $objtabela->inserir($tabela);
	  }
	  header("location:".URL_BASE."tabela");
   }
   //salvar acao
    
	
	public function inserirAcao(){ 
	 
	 $objTabela = new Tabela();
	 $objTabelaAcao = new TabelaAcao();
	 
	 //$id_tabela = new \stdClass();
	   
     $id_tabela     = isset ($_POST["id_tabela"])?strip_tags(filter_input(INPUT_POST,"id_tabela")):null;
	 
	 //$id_acao = new \stdClass();
	 
     $id_acao        = isset ($_POST["id_acao"])?strip_tags(filter_input(INPUT_POST,"id_acao")):null;
	 
	 

	   $tem = $objTabelaAcao->getTabelaAcao($id_tabela,$id_acao);
	   if(!$tem){
	   $objTabelaAcao->inserir($id_tabela,$id_acao);
	   }
	  header("location:".URL_BASE."tabela/".$id_tabela);
   }
  
   
   
   
   //excluir tabela
   
   public function excluir($id_tabela){
	   
	   $objtabela = new Tabela();
	   $objtabela->excluir($id_tabela);
	   header("location:".URL_BASE."tabela");
	   
	   
   }
   
   

}
