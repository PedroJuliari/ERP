<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Tabela;
use app\models\TabelaAcao;
use app\models\Usuario;
use app\models\Permissao;

class PermissaoController extends Controller{ 
    //index
   public function index($id_usuario){	
        $objTabela = new Tabela();
		$objUsuario = new Usuario();
		
        $dados ["listas"]        = $this->lista($id_usuario); 
		$dados ["usuario"]      = $objUsuario->getUsuario($id_usuario); 
        $dados["view"]		     = "Permissao/Index";	
       
        $this->load("template", $dados);
   } 
   //permissao negada
   public function sem_permissao(){	
        
        $dados["view"]		     = "Permissao/Sempermissao";	
       
        $this->load("template", $dados);
   } 
   //lista
         public function lista($id_usuario){
	    $objTabela = new Tabela();
		$objTabelaAcao = new TabelaAcao();
		$objPermissao = new Permissao();
		$dados=array();
		
		$listas = $objTabela->lista();
		
		foreach ($listas as $tabela){
			$acoes =$objTabelaAcao->getListaPorTabela($tabela->id_tabela);
			$action=array();
			foreach ($acoes as $acao){
				$tem = $objPermissao->getPermissao($id_usuario,$tabela->id_tabela,$acao->id_acao);
			    $marcado = ($tem)? true: false;
				$action[]=(object)array(
				"id_acao"   =>$acao->id_acao,
				"id_tabela_acao"   =>$acao->id_tabela_acao,
				"acao"      =>$acao->acao,
				"marcado"   =>$marcado
				);
				
			}
			$dados[]=(object)array(
			
			"tabela"=>$tabela,
			"acoes" =>$action
			);
		}
	
		return $dados;
		
	
	}
	
	//salvar
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
   
   
	public function inserir(){ 
	 
	 $objPermissao = new Permissao();
	
	 $id_usuario        = isset ($_POST["id_usuario"])?strip_tags(filter_input(INPUT_POST,"id_usuario")):null; 
     $id_tabela         = isset ($_POST["id_tabela"])?strip_tags(filter_input(INPUT_POST,"id_tabela")):null;
     $id_acao           = isset ($_POST["id_acao"])?strip_tags(filter_input(INPUT_POST,"id_acao")):null;
	 
	   $tem = $objPermissao->getPermissao($id_usuario,$id_tabela,$id_acao);
	   if(!$tem){
	  $objPermissao->inserir($id_usuario,$id_tabela,$id_acao);
	   echo json_encode("ok");
	   }else{
	   echo json_encode("não"); 
	   }
	  
	  
   }
  
   
   //excluir 
   
   public function excluir(){
	   
	  $objPermissao = new Permissao();
	
	 $id_usuario        = isset ($_POST["id_usuario"])?strip_tags(filter_input(INPUT_POST,"id_usuario")):null; 
     $id_tabela         = isset ($_POST["id_tabela"])?strip_tags(filter_input(INPUT_POST,"id_tabela")):null;
     $id_acao           = isset ($_POST["id_acao"])?strip_tags(filter_input(INPUT_POST,"id_acao")):null;
     $objPermissao->excluir($id_usuario, $id_tabela, $id_acao);
	  echo json_encode("ok");
	   
   }
   
  
}
