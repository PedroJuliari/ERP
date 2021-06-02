<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Produto;
use app\models\Categoria;
use app\models\Unidade;

class ProdutoProducao extends Controller{ 

public function __construct(){

	if(!isset($_SESSION["usuariologado"])){
	header("location:".URL_BASE."login");
	
	}
	$this->id_usuario =$_SESSION["usuariologado"]->id_usuario;
	$this->objPermissao = new Permissao();
	$this->alias_tabela ="producao";
	$this->objPermissao->temPermissao($this->id_produto,$this->alias_tabela, 'lista');
}

    
   public function index(){
     $objProduto = new Produto();
	 $objCategoria = new Categoria();
	 $objUnidade = new Unidade();
	 
	 $pesquisa = new\stdClass();
	 $pesquisa->produto = null;
	 $pesquisa->idCategoria = null;
	 $pesquisa->id_unidade = null;

	
	  
	  $pg         = isset($_GET["pg"])?$_GET["pg"]:0;
	  $total      = $objProduto->getTotal($pesquisa);
	  $lpp        = 10;
	  $inicio     = $pg* $lpp;
	  
	  $dados["produtos"]      = $objProduto->filtro($pesquisa,$inicio,$lpp);
	  $dados["categorias"]    = $objCategoria->lista();
	  $dados["unidades"]      = $objUnidade->lista();
	  $dados["pg"]            =  $pg;
	  $dados["paginas"]       = ceil($total/$lpp-1);
	  $dados["total"]         = $total;
	  $dados["url"]           = URL_BASE."produto/";
	  $dados["view"]          = "Produto/Index";
      $this->load("template", $dados);
   } 
   
   public function filtro(){
     $objProduto = new Produto();
	 $objCategoria = new Categoria();
	 $objUnidade = new Unidade();
	 
	
	 
	 $pesquisa = new\stdClass();
	 $pesquisa->produto =     isset($_GET["produto"])? strip_tags(filter_input(INPUT_GET,"produto")):NULL;
	 $pesquisa->idCategoria = isset($_GET["idCategoria"])? strip_tags(filter_input(INPUT_GET,"idCategoria")):NULL;
	 $pesquisa->id_unidade =  isset($_GET["id_unidade"])? strip_tags(filter_input(INPUT_GET,"id_unidade")):NULL;
	
	  
	  $pg         = isset($_GET["pg"])?$_GET["pg"]:0;
	  $total      = $objProduto->getTotal($pesquisa);
	  $lpp        = 10;
	  $inicio     = $pg* $lpp;
	  
	  $dados["produtos"]      = $objProduto->filtro($pesquisa,$inicio,$lpp);
	  $dados["categorias"]    = $objCategoria->lista();
	  $dados["unidades"]      = $objUnidade->lista();
	  $dados["pg"]            =  $pg;
	  $dados["paginas"]       = ceil($total/$lpp-1);
	  $dados["total"]         = $total;
	  $dados["url"]           = URL_BASE."produto/?produto=".$pesquisa->produto ."&idCategoria=" .$pesquisa->idCategoria ."&id_unidade=".$pesquisa->id_unidade;
	  $dados["view"]          = "Produto/Index";
       $this->load("template", $dados);
   } 
   

   
   public function create(){ 
   
     $objProduto = new Produto();
     $objCategoria = new Categoria();
	 $objUnidade = new Unidade();  
	  
       $dados["categorias"]    = $objCategoria->lista();
	   $dados["unidades"]      = $objUnidade->lista();   
       $dados["view"] = "Produto/Create-Edit";
       $this->load("template", $dados);
   }
   
   
   
   public function edit($id_produto=null){
	   //$this->objPermissao($this->id_produto,$this->alias_tabela,'editar');
       $objProduto = new Produto();
	   
	   if(!$id_produto){
		   header("location:".URL_BASE."produto");
		   
	   }else{
		   $produto = $objProduto->getProduto($id_produto);
	   }
	   if(!$produto){
		   header("location:".URL_BASE."produto");
	   }

       $dados["produto"]  = $produto;
       $dados["view"]       = "Produto/Create-Edit";
       $this->load("template", $dados);
   }
  
  //metodo deleta produto validaçoes
  
  public function delet($id_produto=null){
	  
	  
       $objProduto = new Produto();
	   
	   if(!$id_produto){
		   header("location:".URL_BASE."produto");
		   
	   }else{
		   $produto = $objProduto->getProduto($id_produto);
	   }
	   if(!$produto){
		   header("location:".URL_BASE."produto");
	   }

       $dados["produto"]  = $produto;
       $dados["view"]       = "Produto/Delete";
       $this->load("template", $dados);
   }
   
   //metodo salvar com evitando o sqlinjectiom
   
   public function salvar(){ 
	 
	 $objProduto = new Produto();
	   
	   $produto = new \stdClass();
	   
$produto->id_produto           = isset ($_POST["id_produto           "])?strip_tags(filter_input(INPUT_POST,"id_produto           ")):null;
$produto->id_categoria         = isset ($_POST["id_categoria         "])?strip_tags(filter_input(INPUT_POST,"id_categoria         ")):null;
$produto->id_unidade           = isset ($_POST["id_unidade           "])?strip_tags(filter_input(INPUT_POST,"id_unidade           ")):null;
$produto->id_grupo             = isset ($_POST["id_grupo             "])?strip_tags(filter_input(INPUT_POST,"id_grupo             ")):null;
$produto->id_tributacao        = isset ($_POST["id_tributacao        "])?strip_tags(filter_input(INPUT_POST,"id_tributacao        ")):null;
$produto->produto              = isset ($_POST["produto              "])?strip_tags(filter_input(INPUT_POST,"produto              ")):null;
$produto->eh_produto           = isset ($_POST["eh_produto           "])?strip_tags(filter_input(INPUT_POST,"eh_produto           ")):null;
$produto->eh_insumo            = isset ($_POST["eh_insumo            "])?strip_tags(filter_input(INPUT_POST,"eh_insumo            ")):null;
$produto->codigo_personalizado = isset ($_POST["codigo_personalizado "])?strip_tags(filter_input(INPUT_POST,"codigo_personalizado ")):null;
$produto->preco_alto           = isset ($_POST["preco_alto           "])?strip_tags(filter_input(INPUT_POST,"preco_alto           ")):null;
$produto->preco                = isset ($_POST["preco                "])?strip_tags(filter_input(INPUT_POST,"preco                ")):null;
$produto->custo_medio          = isset ($_POST["custo_medio          "])?strip_tags(filter_input(INPUT_POST,"custo_medio          ")):null;
$produto->custo_atual          = isset ($_POST["custo_atual          "])?strip_tags(filter_input(INPUT_POST,"custo_atual          ")):null;
$produto->imagem               = isset ($_POST["imagem               "])?strip_tags(filter_input(INPUT_POST,"imagem               ")):null;
$produto->ativo                = isset ($_POST["ativo                "])?strip_tags(filter_input(INPUT_POST,"ativo                ")):null;
$produto->cfop                 = isset ($_POST["cfop                 "])?strip_tags(filter_input(INPUT_POST,"cfop                 ")):null;
$produto->gtin                 = isset ($_POST["gtin                 "])?strip_tags(filter_input(INPUT_POST,"gtin                 ")):null;
$produto->ncm                  = isset ($_POST["ncm                  "])?strip_tags(filter_input(INPUT_POST,"ncm                  ")):null;
$produto->cest                 = isset ($_POST["cest                 "])?strip_tags(filter_input(INPUT_POST,"cest                 ")):null;
$produto->cbenef               = isset ($_POST["cbenef               "])?strip_tags(filter_input(INPUT_POST,"cbenef               ")):null;
$produto->extipe               = isset ($_POST["extipe               "])?strip_tags(filter_input(INPUT_POST,"extipe               ")):null;
$produto->mva                  = isset ($_POST["mva                  "])?strip_tags(filter_input(INPUT_POST,"mva                  ")):null;
$produto->nfci                 = isset ($_POST["nfci                 "])?strip_tags(filter_input(INPUT_POST,"nfci                 ")):null;
$produto->estoque_inicial      = isset ($_POST["estoque_inicial      "])?strip_tags(filter_input(INPUT_POST,"estoque_inicial      ")):null;
$produto->estoque_atual        = isset ($_POST["estoque_atual        "])?strip_tags(filter_input(INPUT_POST,"estoque_atual        ")):null;
$produto->estoque_minimo       = isset ($_POST["estoque_minimo       "])?strip_tags(filter_input(INPUT_POST,"estoque_minimo       ")):null;
$produto->estoque_reposicao    = isset ($_POST["estoque_reposicao    "])?strip_tags(filter_input(INPUT_POST,"estoque_reposicao    ")):null;
$produto->estoque_maximo       = isset ($_POST["estoque_maximo       "])?strip_tags(filter_input(INPUT_POST,"estoque_maximo       ")):null;
$produto->eh_lancamento        = isset ($_POST["eh_lancamento        "])?strip_tags(filter_input(INPUT_POST,"eh_lancamento        ")):null;
$produto->eh_promocao          = isset ($_POST["eh_promocao          "])?strip_tags(filter_input(INPUT_POST,"eh_promocao          ")):null;
$produto->eh_maisvendido       = isset ($_POST["eh_maisvendido       "])?strip_tags(filter_input(INPUT_POST,"eh_maisvendido       ")):null;
$produto->descricao            = isset ($_POST["descricao            "])?strip_tags(filter_input(INPUT_POST,"descricao            ")):null;
$produto->peso_correio         = isset ($_POST["peso_correio         "])?strip_tags(filter_input(INPUT_POST,"peso_correio         ")):null;     
$produto->diametro_correio     = isset ($_POST["diametro_correio     "])?strip_tags(filter_input(INPUT_POST,"diametro_correio     ")):null;
$produto->comprimento_correio  = isset ($_POST["comprimento_correio  "])?strip_tags(filter_input(INPUT_POST,"comprimento_correio  ")):null;
$produto->largura_correio      = isset ($_POST["largura_correio      "])?strip_tags(filter_input(INPUT_POST,"largura_correio      ")):null;
$produto->altura_correio       = isset ($_POST["altura_correio       "])?strip_tags(filter_input(INPUT_POST,"altura_correio       ")):null;
 
	   if($produto->id_produto){
		  $objProduto->editar($produto);
	  }else{
		  $objProduto->inserir($produto);
	  }
	  header("location:".URL_BASE."produto");
   }
   
   //excluir produto
   
   public function excluir($id_produto){
	   
	   $objProduto = new Produto();
	   $objProduto->excluir($id_produto);
	   header("location:".URL_BASE."produto");
	   
	   
   }

}
