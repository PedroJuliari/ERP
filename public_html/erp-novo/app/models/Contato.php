<?php 
  namespace app\models;
  use app\core\Model;

class Contato extends Model{
	
	public function filtro($pesquisa, $inicio,$lpp){
		$complemento="";
		$sql = "SELECT * FROM contato WHERE 1";
		
		if ($pesquisa->nome){
			$complemento .="AND nome like '%".$pesquisa->nome."%'";
		}
		if ($pesquisa->cpf){
			$complemento .="AND cpf like '%".$pesquisa->cpf."%'";
		}
		
		$sql .=$complemento ." LIMIT $inicio, $lpp ";
		
		$qry = $this->db->query($sql);
		return $qry->fetchAll(\PDO::FETCH_OBJ);
	
	}
	
	public function getTotal($pesquisa=null){
		$complemento="";
		$sql = "SELECT count(*)as total FROM contato WHERE 1";
		
		if ($pesquisa->nome){
			$complemento .="AND nome like '%".$pesquisa->nome."%'";
		}
		if ($pesquisa->cpf){
			$complemento .="AND cpf like '%".$pesquisa->cpf."%'";
		}
		
		
		
		$qry = $this->db->query($sql . $complemento);
		return $qry->fetch(\PDO::FETCH_OBJ)->total;
	
	
}

        public function getContato($id_contato){
			
			$sql ="SELECT * FROM contato WHERE id_contato = :id";
			$qry = $this->db->prepare($sql);
			$qry->bindValue(":id",$id_contato);
		    $qry->execute();
			
			return $qry->fetch(\PDO::FETCH_OBJ);
		}


      public function inserir($contato){
		  
		  $sql="INSERT INTO contato SET
		  eh_cliente	            =:eh_cliente, 
		  eh_fornecedor	            =:eh_fornecedor,
		  eh_transportador          =:eh_transportador,
		  nome	                    =:nome, 
		  nome_fantasia	            =:nome_fantasia,
		  cpf                       =:cpf,
		  cnpj	                    =:cnpj, 
		  data_cadastro	            =:data_cadastro,
		  ativo	                    =:ativo,
		  ddd	                    =:ddd, 
		  fone	                    =:fone,
		  celular	                =:celular,
		  cpf	                    =:cpf, 
		  senha	                    =:senha,
		  cep	                    =:cep,
		  logradouro	            =:logradouro, 
		  numero	                =:numero,
		  id_estado	                =:id_estado,
		  id_cidade	                =:id_cidade, 
		  ie	                    =:ie,
		  suframa	                =:suframa,
		  cod_estrangeiro           =:cod_estrangeiro,
          ie_subt_trib	            =:ie_subt_trib,	  
		  complemento               =:complemento,
		  bairro	                =:bairro,	 
		  im	                    =:im,  
		  rg                        =:rg";
		  
		 $qry = $this->db->prepare($sql);
		 
		  $qry->bindValue(":eh_cliente	      ",$contato->eh_cliente	  );
		  $qry->bindValue(":eh_fornecedor	  ",$contato->eh_fornecedor	  );
		  $qry->bindValue(":eh_transportador  ",$contato->eh_transportador);
		  $qry->bindValue(":nome	          ",$contato->nome	          );
		  $qry->bindValue(":nome_fantasia	  ",$contato->nome_fantasia	  );
		  $qry->bindValue(":cpf               ",$contato->cpf             );
		  $qry->bindValue(":cnpj	          ",$contato->cnpj	          );
		  $qry->bindValue(":data_cadastro	  ",$contato->data_cadastro	  );
		  $qry->bindValue(":ativo	          ",$contato->ativo	          );
		  $qry->bindValue(":ddd	              ",$contato->ddd	          );
		  $qry->bindValue(":fone	          ",$contato->fone	          );
		  $qry->bindValue(":celular	          ",$contato->celular	      );
		  $qry->bindValue(":cpf	              ",$contato->cpf	          );
		  $qry->bindValue(":senha	          ",$contato->senha	          );
		  $qry->bindValue(":cep	              ",$contato->cep	          );
		  $qry->bindValue(":logradouro	      ",$contato->logradouro	  );
		  $qry->bindValue(":numero	          ",$contato->numero	      );
		  $qry->bindValue(":id_estado	      ",$contato->id_estado	      );
		  $qry->bindValue(":id_cidade	      ",$contato->id_cidade	      );
		  $qry->bindValue(":ie	              ",$contato->ie	          );
		  $qry->bindValue(":suframa	          ",$contato->suframa	      );
		  $qry->bindValue(":cod_estrangeiro   ",$contato->cod_estrangeiro );
		  $qry->bindValue(":ie_subt_trib	  ",$contato->ie_subt_trib	  );
		  $qry->bindValue(":complemento       ",$contato->complemento     );
		  $qry->bindValue(":bairro	          ",$contato->bairro	      );
		  $qry->bindValue(":im	              ",$contato->im	          );
		  $qry->bindValue(":rg                ",$contato->rg              );
		  $qry->execute();
		  
		  return $this->db->lastInsertId();
		  
		  
	  }
	  public function editar($contato){
		  
		  $sql="UPDATE contato SET
		  eh_cliente	            =:eh_cliente	  , 
		  eh_fornecedor	            =:eh_fornecedor	  ,
		  eh_transportador          =:eh_transportador,
		  nome	                    =:nome	          , 
		  nome_fantasia	            =:nome_fantasia	  ,
		  cpf                       =:cpf             ,
		  cnpj	                    =:cnpj	          , 
		  data_cadastro	            =:data_cadastro	  ,
		  ativo	                    =:ativo	          ,
		  ddd	                    =:ddd	          , 
		  fone	                    =:fone	          ,
		  celular	                =:celular	      ,
		  cpf	                    =:cpf	          , 
		  senha	                    =:senha	          ,
		  cep	                    =:cep	          ,
		  logradouro	            =:logradouro	  , 
		  numero	                =:numero	      ,
		  id_estado	                =:id_estado	      ,
		  id_cidade	                =:id_cidade	      , 
		  ie	                    =:ie	          ,
		  suframa	                =:suframa	      ,
		  cod_estrangeiro           =:cod_estrangeiro , 
		  ie_subt_trib	            =:ie_subt_trib	  ,
          complemento               =:complemento     ,
		  bairro	                =:bairro	      ,
		  im	                    =:im	          , 
		  rg                        =:rg          		    
		  WHERE id_contato = :id
		  ";
		  
		  $qry = $this->db->prepare($sql);
		  
		 
	      $qry->bindValue(":id                ",$contato->id_contato      );
		  $qry->bindValue(":eh_cliente	      ",$contato->eh_cliente	  );
		  $qry->bindValue(":eh_fornecedor	  ",$contato->eh_fornecedor	  );
		  $qry->bindValue(":eh_transportador  ",$contato->eh_transportador);
		  $qry->bindValue(":nome	          ",$contato->nome	          );
		  $qry->bindValue(":nome_fantasia	  ",$contato->nome_fantasia	  );
		  $qry->bindValue(":cpf               ",$contato->cpf             );
		  $qry->bindValue(":cnpj	          ",$contato->cnpj	          );
		  $qry->bindValue(":data_cadastro	  ",$contato->data_cadastro	  );
		  $qry->bindValue(":ativo	          ",$contato->ativo	          );
		  $qry->bindValue(":ddd	              ",$contato->ddd	          );
		  $qry->bindValue(":fone	          ",$contato->fone	          );
		  $qry->bindValue(":celular	          ",$contato->celular	      );
		  $qry->bindValue(":cpf	              ",$contato->cpf	          );
		  $qry->bindValue(":senha	          ",$contato->senha	          );
		  $qry->bindValue(":cep	              ",$contato->cep	          );
		  $qry->bindValue(":logradouro	      ",$contato->logradouro	  );
		  $qry->bindValue(":numero	          ",$contato->numero	      );
		  $qry->bindValue(":id_estado	      ",$contato->id_estado	      );
		  $qry->bindValue(":id_cidade	      ",$contato->id_cidade	      );
		  $qry->bindValue(":ie	              ",$contato->ie	          );
		  $qry->bindValue(":suframa	          ",$contato->suframa	      );
		  $qry->bindValue(":cod_estrangeiro   ",$contato->cod_estrangeiro );
		  $qry->bindValue(":ie_subt_trib	  ",$contato->ie_subt_trib	  );
		  $qry->bindValue(":complemento       ",$contato->complemento     );
		  $qry->bindValue(":bairro	          ",$contato->bairro	      );
		  $qry->bindValue(":im	              ",$contato->im	          );
		  $qry->bindValue(":rg                ",$contato->rg              );
	
		  $qry->execute();
	  }
	   
	   //excluindo contato
	   public function excluir($id_contato){
		   
		   $sql="DELETE FROM contato WHERE id_contato =:id";
		   $qry = $this->db->prepare($sql);
		   $qry->bindValue(":id",$id_contato);
		   $qry->execute();
		   
	   }
}

 ?>
                