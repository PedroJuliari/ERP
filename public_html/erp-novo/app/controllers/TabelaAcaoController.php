<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Tabela;
use app\models\Acao;
use app\models\TabelaAcao;

class TabelaAcaoController extends Controller{ 

public function __construct(){

	if(!isset($_SESSION["usuariologado"])){
	header("location:".URL_BASE."login");
	
	}
	$this->id_usuario =$_SESSION["usuariologado"]->id_usuario;
	$this->objPermissao = new Permissao();
	$this->alias_tabela ="acao";
	$this->objPermissao->temPermissao($this->id_tabela,$this->alias_tabela, 'lista');
}

    
   public function index(){
   
	 $objTabela = new Tabela();
	 $objTabelaAcao = new TabelaAcao();
	 
	 $pesquisa = new\stdClass();
	 $pesquisa->id_tabela = null;
	 $pesquisa->id_acao = null;

	  
	  $pg         = isset($_GET["pg"])?$_GET["pg"]:0;
	  $total      = $objTabelaAcao->getTabelaAcao($pesquisa);
	  $lpp        = 5;
	  $inicio     = $pg* $lpp;
	 
	  $dados ["tabelas"]      = $objTabelaAcao->filtro($pesquisa,$inicio,$lpp);
	  $dados ["acao"]         = $objTabelaAcao->filtro($pesquisa,$inicio,$lpp);
	  $dados ["lista"]        = $objTabelaAcao->filtro($pesquisa,$inicio,$lpp);
	  $dados["pg"]            =  $pg;
	  $dados["paginas"]       = ceil($total/$lpp-1);
	  $dados["total"]         = $total;
	  $dados["url"]           = URL_BASE."tabelaacao/?";
	  $dados["view"]          = "Tabela/Acoestab";
       $this->load("template", $dados);
   } 
 public function acoestab($id_tabela){

		$objAcao       = new Acao();
		$objTabela     = new Tabela();
		$objTabelaAcao = new TabelaAcao();
		
		if(!$id_tabela){
		   header("location:".URL_BASE."tabela");
		   
	   }else{
		   $tabela = $objTabelaAcao->getListaPorTabela($id_tabela);
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
       $dados["view"] = "tabela/Create-Edit";
       $this->load("template", $dados);
   }
   
   
   
   public function edit($id_tabela=null){
	   //$this->objPermissao($this->id_tabela,$this->alias_tabela,'editar');
       $objTabelaAcao = new TabelaAcao();
	   
	   if(!$id_tabela){
		   header("location:".URL_BASE."tabelaacao");
		   
	   }else{
		   $tabela = $objTabelaAcao->getTabelaAcao($id_tabela);
	   }
	   if(!$tabela){
		   header("location:".URL_BASE."tabelaacao");
	   }

       $dados["tabela"]  = $tabela;
       $dados["view"]       = "Tabela/Create-Edit";
       $this->load("template", $dados);
   }
  
  //metodo deleta tabela validaçoes
  
  public function delet($id_tabela=null){
	  
	  
       $objTabelaAcao = new TabelaAcao();
	   
	   if(!$id_tabela){
		   header("location:".URL_BASE."tabelaacao");
		   
	   }else{
		   $tabela = $objTabelaAcao->getTabelaAcao($id_tabela);
	   }
	   if(!$tabela){
		   header("location:".URL_BASE."tabelaacao");
	   }

       $dados["tabela"]  = $tabela;
       $dados["view"]       = "Tabela/Delete";
       $this->load("template", $dados);
   }
   
   //metodo inserir com evitando o sqlinjectiom
    
	public function inserirAcao(){ 
	 
	 $objTabela = new Tabela();
	 $objTabelaAcao = new TabelaAcao();
	 
	 //$tabela = new \stdClass();
	   
     $id_tabela     = isset ($_POST["id_tabela"])?strip_tags(filter_input(INPUT_POST,"id_tabela")):null;
     $id_acao        = isset ($_POST["id_acao"])?strip_tags(filter_input(INPUT_POST,"id_acao")):null;
	 
	 

	   $tem = $objTabelaAcao->getListaPorTabela($id_tabela);
	   if(!$tem){
	   $objTabelaAcao->inserir($id_tabela,$id_acao);
	   }
	  header("location:".URL_BASE."tabelaacao/acoestab/".$id_tabela);
   }
  
   
   //excluir tabela
   
   public function excluir($id_acao, $id_tabela){
	   
	   $objTabelaAcao = new TabelaAcao();
	   $objTabelaAcao->excluir($id_acao,$id_tabela);
	   header("location:".URL_BASE."tabelaacao/acoestab/".$id_tabela);
	   
	   
   }
   
  
 
      
	  
  

}
