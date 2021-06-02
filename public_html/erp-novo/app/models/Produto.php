<?php 
  namespace app\models;
  use app\core\Model;

class Produto extends Model{
	
	public function filtro($pesquisa, $inicio,$lpp){
		$complemento="";
		$sql = "SELECT * FROM produto WHERE 1";
		
		if ($pesquisa->produto){
			$complemento .="AND produto like '%".$pesquisa->produto."%'";
		}
		if ($pesquisa->categoria){
			$complemento .="AND id_categoria= '".$pesquisa->idCategoria."'";
		}
		
		$sql .=$complemento ." LIMIT $inicio, $lpp ";
		
		$qry = $this->db->query($sql .$complemento);
		return $qry->fetchAll(\PDO::FETCH_OBJ);
	
	}
	
	public function getTotal($pesquisa=null){
		$complemento="";
		$sql = "SELECT count(*)as total FROM produto WHERE 1";
		
		if ($pesquisa->produto){
			$complemento .="AND produto like '%" .$pesquisa->produto."%'";
		}
		if ($pesquisa->categoria){
			$complemento .="AND id_categoria = '" .$pesquisa->idCategoria."'";
		}
		
		$qry = $this->db->query($sql .$complemento);
		return $qry->fetch(\PDO::FETCH_OBJ)->total;
	
	
}

        public function getProduto($id_produto){
			
			$sql ="SELECT * FROM produto WHERE id_produto = :id";
			$qry = $this->db->prepare($sql);
			$qry->bindValue(":id",$id_produto);
		    $qry->execute();
			
			return $qry->fetch(\PDO::FETCH_OBJ);
		}


      public function inserir($produto){
		  
		  $sql="INSERT INTO produto SET
		  id_produto              =:id_produto,
		  id_categoria            =:id_categoria,
		  id_unidade              =:id_unidade,
		  id_grupo                =:id_grupo,
		  id_tributacao           =:id_tributacao,
		  produto                 =:produto,
	      eh_produto              =:eh_produto,
		  eh_insumo               =:eh_insumo, 
          codigo_personalizado    =:codigo_personalizado,
		  preco_alto              =:preco_alto,
          preco                   =:preco, 
          custo_medio             =:custo_medio, 			  
          custo_atual             =:custo_atual,
		  imagem                  =:imagem,
		  ativo                   =:ativo,
          cfop                    =:cfop,
          gtin                    =:gtin,
          ncm                     =:ncm,
          cest                    =:cest,
          cbenef                  =:cbenef,
          extipe                  =:extipe,
          mva                     =:mva,
          nfci                    =:nfci,
          estoque_inicial         =:estoque_inicial,
          estoque_atual           =:estoque_atual,
		  estoque_minimo          =:estoque_minimo,
		  estoque_reposicao       =:estoque_reposicao,
		  estoque_maximo          =:estoque_maximo,
          eh_lancamento           =:eh_lancamento,
          eh_promocao             =:eh_promocao,
          eh_maisvendido          =:eh_maisvendido,
          descricao               =:descricao,
          peso_correio            =:peso_correio,
          diametro_correio        =:diametro_correio,
          comprimento_correio     =:comprimento_correio, 
		  largura_correio         =:largura_correio,
		  altura_correio          =:altura_correio
		  ";
		  
		 $qry = $this->db->prepare($sql);
		 
	      $qry->bindValue(":id_produto"          ,$produto->id_produto);
		  $qry->bindValue(":id_categoria"        ,$produto->id_categoria);
		  $qry->bindValue(":id_unidade"          ,$produto->id_unidade);
		  $qry->bindValue(":id_grupo"            ,$produto->id_grupo);
		  $qry->bindValue(":id_tributacao"       ,$produto->id_tributacao);
		  $qry->bindValue(":produto"             ,$produto->produto);
		  $qry->bindValue(":eh_produto"          ,$produto->eh_produto);
		  $qry->bindValue(":eh_insumo"           ,$produto->eh_insumo);
		  $qry->bindValue(":codigo_personalizado",$produto->codigo_personalizado);
		  $qry->bindValue(":preco_alto"          ,$produto->preco_alto);
		  $qry->bindValue(":preco"               ,$produto->preco);
		  $qry->bindValue(":custo_medio"         ,$produto->custo_medio);
		  $qry->bindValue(":custo_atual"         ,$produto->custo_atual);
		  $qry->bindValue(":imagem"              ,$produto->imagem);
		  $qry->bindValue(":ativo"               ,$produto->ativo);
		  $qry->bindValue(":cfop"                ,$produto->cfop);
		  $qry->bindValue(":gtin"                ,$produto->gtin);
		  $qry->bindValue(":ncm"                 ,$produto->ncm);
		  $qry->bindValue(":cest"                ,$produto->cest);
		  $qry->bindValue(":cbenef"              ,$produto->cbenef);
		  $qry->bindValue(":extipe"              ,$produto->extipe);
		  $qry->bindValue(":mva"                 ,$produto->mva);
		  $qry->bindValue(":nfci"                ,$produto->nfci);
		  $qry->bindValue(":estoque_inicial"     ,$produto->estoque_inicial);
		  $qry->bindValue(":estoque_atual"       ,$produto->estoque_atual);
		  $qry->bindValue(":estoque_minimo"      ,$produto->estoque_minimo);
		  $qry->bindValue(":estoque_reposicao"   ,$produto->estoque_reposicao);
		  $qry->bindValue(":estoque_maximo"      ,$produto->estoque_maximo);
		  $qry->bindValue(":eh_lancamento"       ,$produto->eh_lancamento);
		  $qry->bindValue(":eh_promocao"         ,$produto->eh_promocao);
		  $qry->bindValue(":eh_maisvendido"      ,$produto->eh_maisvendido);
		  $qry->bindValue(":descricao"           ,$produto->descricao);
		  $qry->bindValue(":peso_correio"        ,$produto->peso_correio);
		  $qry->bindValue(":diametro_correio"    ,$produto->diametro_correio);
		  $qry->bindValue(":comprimento_correio" ,$produto->comprimento_correio);
		  $qry->bindValue(":largura_correio"     ,$produto->largura_correio);
		  $qry->bindValue(":altura_correio"      ,$produto->altura_correio);
	
		
		  $qry->execute();
		  
		  return $this->db->lastInsertId();
		  
		  
	  }
	  public function editar($produto){
		  
		  $sql="UPDATE produto SET
		  id_produto              =:id_produto,
		  id_categoria            =:id_categoria,
		  id_unidade              =:id_unidade,
		  id_grupo                =:id_grupo,
		  id_tributacao           =:id_tributacao,
		  produto                 =:produto,
		  eh_produto              =:eh_produto,
		  eh_insumo               =:eh_insumo, 
		  codigo_personalizado    =:codigo_personalizado,
		  preco_alto              =:preco_alto,
		  preco                   =:preco, 
		  custo_medio             =:custo_medio, 			
		  custo_atual             =:custo_atual,
		  imagem                  =:imagem,
		  ativo                   =:ativo,
		  cfop                    =:cfop,
		  gtin                    =:gtin,
		  ncm                     =:ncm,
		  cest                    =:cest,
		  cbenef                  =:cbenef,
		  extipe                  =:extipe,
		  mva                     =:mva,
		  nfci                    =:nfci,
		  estoque_inicial         =:estoque_inicial,
		  estoque_atual           =:estoque_atual,
		  estoque_minimo          =:estoque_minimo,
		  estoque_reposicao       =:estoque_reposicao,
		  estoque_maximo          =:estoque_maximo,
		  eh_lancamento           =:eh_lancamento,
		  eh_promocao             =:eh_promocao,
		  eh_maisvendido          =:eh_maisvendido,
		  descricao               =:descricao,
		  peso_correio            =:peso_correio,
		  diametro_correio        =:diametro_correio,
		  comprimento_correio     =:comprimento_correio, 
		  largura_correio         =:largura_correio,
		  altura_correio          =:altura_correio WHERE id_produto = :id
	
		  ";
		  
		  $qry = $this->db->prepare($sql);
		  
	   	  $qry->bindValue(":id_produto",                       $produto->id_produto);
		  $qry->bindValue(":id_categoria",                     $produto->id_categoria);
		  $qry->bindValue(":id_unidade",                       $produto->id_unidade);
		  $qry->bindValue(":id_grupo",                         $produto->id_grupo);
		  $qry->bindValue(":id_tributacao",                    $produto->id_tributacao);
		  $qry->bindValue(":produto",                          $produto->produto);
		  $qry->bindValue(":eh_produto",                       $produto->eh_produto);
		  $qry->bindValue(":eh_insumo",                        $produto->eh_insumo);
		  $qry->bindValue(":codigo_personalizado",             $produto->codigo_personalizado);
		  $qry->bindValue(":preco_alto",                       $produto->preco_alto);
		  $qry->bindValue(":preco",                            $produto->preco);
		  $qry->bindValue(":custo_medio",                      $produto->custo_medio);
		  $qry->bindValue(":custo_atual",                      $produto->custo_atual);
		  $qry->bindValue(":imagem",                           $produto->imagem);
		  $qry->bindValue(":ativo",                            $produto->cfop);
		  $qry->bindValue(":gtin",                             $produto->gtin);
		  $qry->bindValue(":ncm",                              $produto->ncm);
		  $qry->bindValue(":cest",                             $produto->cest);
		  $qry->bindValue(":cbenef",                           $produto->cbenef);
		  $qry->bindValue(":extipe",                           $produto->extipe);
		  $qry->bindValue(":mva",                              $produto->mva);
		  $qry->bindValue(":nfci",                             $produto->nfci);
		  $qry->bindValue(":estoque_inicial",                  $produto->estoque_inicial);
		  $qry->bindValue(":estoque_atual",                    $produto->estoque_atual);
		  $qry->bindValue(":estoque_minimo",                   $produto->estoque_minimo);
		  $qry->bindValue(":estoque_reposicao",                $produto->estoque_reposicao);
		  $qry->bindValue(":estoque_maximo",                   $produto->estoque_maximo);
		  $qry->bindValue(":eh_lancamento",                    $produto->eh_lancamento);
		  $qry->bindValue(":eh_promocao",                      $produto->eh_promocao);
		  $qry->bindValue(":eh_maisvendido",                   $produto->eh_maisvendido);
		  $qry->bindValue(":descricao",                        $produto->descricao);
		  $qry->bindValue(":peso_correio",                     $produto->peso_correio);
		  $qry->bindValue(":diametro_correio",                 $produto->diametro_correio);
		  $qry->bindValue(":comprimento_correio",              $produto->comprimento_correio);
		  $qry->bindValue(":largura_correio",                  $produto->largura_correio);
		  $qry->bindValue(":altura_correio",                   $produto->altura_correio);
	
		
		  $qry->execute();
	  }
	   
	   //excluindo produto
	   public function excluir($id_produto){
		   
		   $sql="DELETE FROM produto WHERE id_produto =:id";
		   $qry = $this->db->prepare($sql);
		   $qry->bindValue(":id",$id_produto);
		   $qry->execute();
		   
	   }
}

 ?>
                