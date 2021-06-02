<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Contato;
use app\models\Estado;
use app\models\Cidade;


class ContatoController extends Controller{ 

public function __construct(){

	if(!isset($_SESSION["usuariologado"])){
	header("location:".URL_BASE."login");
	
	}
	$this->id_usuario =$_SESSION["usuariologado"]->id_usuario;
	$this->objPermissao = new Permissao();
	$this->alias_tabela ="contato";
	$this->objPermissao->temPermissao($this->id_contato,$this->alias_tabela, 'lista');
}

    
   public function index(){
     $objContato = new Contato();

	 $pesquisa = new\stdClass();
	 $pesquisa->nome = null;
	 $pesquisa->cpf = null;
	  $pg         = isset($_GET["pg"])?$_GET["pg"]:0;
	  $total      = $objContato->getTotal($pesquisa);
	  $lpp        = 10;
	  $inicio     = $pg* $lpp;
	  
	  $dados["contatos"]      = $objContato->filtro($pesquisa,$inicio,$lpp);
	  $dados["pg"]            =  $pg;
	  $dados["paginas"]       = ceil($total/$lpp-1);
	  $dados["total"]         = $total;
	  $dados["url"]           = URL_BASE."contato/?";
	  $dados["view"]          = "Contato/Index";
      $this->load("template", $dados);
   } 
   
   public function filtro(){
     $objContato = new Contato();
	 $pesquisa = new\stdClass();
	 $pesquisa->nome =     isset($_GET["nome"])? strip_tags(filter_input(INPUT_GET,"nome")):NULL;
	 $pesquisa->cpf  =     isset($_GET["cpf"])? strip_tags(filter_input(INPUT_GET,"cpf")):NULL;
	 
	
	  
	  $pg         = isset($_GET["pg"])?$_GET["pg"]:0;
	  $total      = $objContato->getTotal($pesquisa);
	  $lpp        = 10;
	  $inicio     = $pg* $lpp;
	  
	  $dados["contatos"]      = $objContato->filtro($pesquisa,$inicio,$lpp);
	  $dados["pg"]            =  $pg;
	  $dados["paginas"]       = ceil($total/$lpp-1);
	  $dados["total"]         = $total;
	  $dados["url"]           = URL_BASE."contato/?";
	  $dados["view"]          = "Contato/Index";
       $this->load("template", $dados);
   } 
   

   
   public function create(){ 
   
       $objCidade = new Cidade();
	   $objEstado = new Estado();
	   
	   $dados["estados"]      = $objEstado->lista();
	   $dados["cidades"]      = $objCidade->getListaPorIdEstado($_SESSION["CONFIG"]->estado_padrao);
	   $dados["id_estado"]    = $_SESSION["CONFIG"]->estado_padrao;
       $dados["view"] = "Contato/Create-Edit";
       $this->load("template", $dados);
   }
   
   
   
   public function edit($id_contato=null){
	   //$this->objPermissao($this->id_contato,$this->alias_tabela,'editar');
       $objContato = new Contato();
	   
	   if(!$id_contato){
		   header("location:".URL_BASE."contato");
		   
	   }else{
		   $contato = $objContato->getContato($id_contato);
	   }
	   if(!$contato){
		   header("location:".URL_BASE."contato");
	   }

       $dados["contato"]   = $contato;
       $dados["view"]       = "Contato/Create-Edit";
       $this->load("template", $dados);
   }
  
  //metodo deleta contato validaçoes
  
  public function delet($id_contato=null){
	  
	  
       $objContato = new Contato();
	   
	   if(!$id_contato){
		   header("location:".URL_BASE."contato");
		   
	   }else{
		   $contato = $objContato->getContato($id_contato);
	   }
	   if(!$contato){
		   header("location:".URL_BASE."contato");
	   }

       $dados["contato"]  = $contato;
       $dados["view"]       = "Contato/Delete";
       $this->load("template", $dados);
   }
   
   //metodo salvar com evitando o sqlinjectiom
   
   public function salvar(){ 
	 
  $objContato = new Contato();
	   
$contato = new \stdClass();
$contato->id_contato	  = isset($_POST["id_contato	   "])?strip_tags(filter_input(INPUT_POST,"id_contato	    ")):null;
$contato->eh_cliente	  = isset($_POST["eh_cliente	   "])?strip_tags(filter_input(INPUT_POST,"eh_cliente	    ")):null;
$contato->eh_fornecedor	  = isset($_POST["eh_fornecedor	   "])?strip_tags(filter_input(INPUT_POST,"eh_fornecedor	")):null;
$contato->eh_transportador= isset($_POST["eh_transportador "])?strip_tags(filter_input(INPUT_POST,"eh_transportador ")):null;
$contato->nome	          = isset($_POST["nome	           "])?strip_tags(filter_input(INPUT_POST,"nome	            ")):null;
$contato->nome_fantasia	  = isset($_POST["nome_fantasia	   "])?strip_tags(filter_input(INPUT_POST,"nome_fantasia	")):null;
$contato->cpf             = isset($_POST["cpf              "])?strip_tags(filter_input(INPUT_POST,"cpf              ")):null;
$contato->cnpj	          = isset($_POST["cnpj	           "])?strip_tags(filter_input(INPUT_POST,"cnpj	            ")):null;
$contato->data_cadastro	  = isset($_POST["data_cadastro	   "])?strip_tags(filter_input(INPUT_POST,"data_cadastro	")):null;
$contato->ativo	          = isset($_POST["ativo	           "])?strip_tags(filter_input(INPUT_POST,"ativo	        ")):null;
$contato->ddd	          = isset($_POST["ddd	           "])?strip_tags(filter_input(INPUT_POST,"ddd	            ")):null;
$contato->fone	          = isset($_POST["fone	           "])?strip_tags(filter_input(INPUT_POST,"fone	            ")):null;
$contato->celular	      = isset($_POST["celular	       "])?strip_tags(filter_input(INPUT_POST,"celular	        ")):null;
$contato->email	          = isset($_POST["email	           "])?strip_tags(filter_input(INPUT_POST,"email	        ")):null;
$contato->senha	          = isset($_POST["senha	           "])?strip_tags(filter_input(INPUT_POST,"senha	        ")):null;
$contato->cep	          = isset($_POST["cep	           "])?strip_tags(filter_input(INPUT_POST,"cep	            ")):null;
$contato->logradouro	  = isset($_POST["logradouro	   "])?strip_tags(filter_input(INPUT_POST,"logradouro	    ")):null;
$contato->numero	      = isset($_POST["numero	       "])?strip_tags(filter_input(INPUT_POST,"numero	        ")):null;
$contato->id_estado	      = isset($_POST["id_estado	       "])?strip_tags(filter_input(INPUT_POST,"id_estado	    ")):null;
$contato->id_cidade	      = isset($_POST["id_cidade	       "])?strip_tags(filter_input(INPUT_POST,"id_cidade	    ")):null;
$contato->ie	          = isset($_POST["ie	           "])?strip_tags(filter_input(INPUT_POST,"ie	            ")):null;
$contato->complemento	  = isset($_POST["complemento	   "])?strip_tags(filter_input(INPUT_POST,"complemento	    ")):null;
$contato->bairro	      = isset($_POST["bairro	 	   "])?strip_tags(filter_input(INPUT_POST,"bairro	 	    ")):null;
$contato->im	          = isset($_POST["im	     	   "])?strip_tags(filter_input(INPUT_POST,"im	     	    ")):null;
$contato->rg	          = isset($_POST["rg	     	   "])?strip_tags(filter_input(INPUT_POST,"rg	     	    ")):null;
$contato->suframa	      = isset($_POST["suframa	       "])?strip_tags(filter_input(INPUT_POST,"suframa	        ")):null;
$contato->cod_estrangeiro = isset($_POST["cod_estrangeiro  "])?strip_tags(filter_input(INPUT_POST,"cod_estrangeiro  ")):null;
$contato->ie_subt_trib	  = isset($_POST["ie_subt_trib	   "])?strip_tags(filter_input(INPUT_POST,"ie_subt_trib	    ")):null;
 
	   if($contato->id_contato){
		  $objContato->editar($contato);
	  }else{
		  $objContato->inserir($contato);
	  }
	  header("location:".URL_BASE."contato");
   }
   
   //excluir contato
   
   public function excluir($id_contato){
	   
	   $objContato = new Contato();
	   $objContato->excluir($id_contato);
	   header("location:".URL_BASE."contato");
	   
	   
   }

}
