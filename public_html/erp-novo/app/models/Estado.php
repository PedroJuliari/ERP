<?php 
  namespace app\models;
  use app\core\Model;

class Estado extends Model{
	
	public function filtro($pesquisa, $inicio,$lpp){
		$complemento="";
		$sql = "SELECT * FROM estado WHERE 1";
		
		if ($pesquisa->nome_estado){
			$complemento .="AND nome_estado like '%".$pesquisa->nome_estado."%'";
		}
		if ($pesquisa->uf_estado){
			$complemento .="AND uf_estado like '%".$pesquisa->uf_estado."%'";
		}
		if ($pesquisa->codigo_estado){
			$complemento .="AND codigo_estado like '%".$pesquisa->codigo_estado."%'";
		}
		
		$sql .=$complemento ." LIMIT $inicio, $lpp ";
		
		$qry = $this->db->query($sql);
		return $qry->fetchAll(\PDO::FETCH_OBJ);
	
	}
	
	public function getTotal($pesquisa=null){
		$complemento="";
		$sql = "SELECT count(*)as total FROM estado WHERE 1";
		
		if ($pesquisa->nome_estado){
			$complemento .="AND nome_estado like '%".$pesquisa->nome_estado."%'";
		}
		if ($pesquisa->uf_estado){
			$complemento .="AND uf_estado like '%".$pesquisa->uf_estado."%'";
		}
	    if ($pesquisa->codigo_estado){
			$complemento .="AND codigo_estado_estado like '%".$pesquisa->codigo_estado_estado."%'";
		}
		
		
		
		$qry = $this->db->query($sql . $complemento);
		return $qry->fetch(\PDO::FETCH_OBJ)->total;
	
	
}

        public function getEstado($id_estado){
			
			$sql ="SELECT * FROM estado WHERE id_estado = :id";
			$qry = $this->db->prepare($sql);
			$qry->bindValue(":id",$id_estado);
		    $qry->execute();
			
			return $qry->fetch(\PDO::FETCH_OBJ);
		}


      public function inserir ($estado){
		  
		  $sql="INSERT INTO estado SET
		  nome_estado           =:nome_estado,
		  uf_estado             =:uf_estado, 
		  codigo_estado         =:codigo_estado
		
		  ";
		  
		 $qry = $this->db->prepare($sql);
		 
	      $qry->bindValue(":nome_estado",$estado->nome_estado);
		  $qry->bindValue(":uf_estado",$estado->uf_estado);
		  $qry->bindValue(":codigo_estado",$estado->codigo_estado);
		 
		  $qry->execute();
		  
		  return $this->db->lastInsertId();
		  
		  
	  }
	  public function editar($estado){
		  
		  $sql="UPDATE estado SET
		   nome_estado    =:nome_estado,
		   uf_estado      =:uf_estado, 
		   codigo_estado  =:codigo_estado
		   
		  WHERE id_estado = :id
		  ";
		  
		  $qry = $this->db->prepare($sql);
		  $qry->bindValue("id",$estado->id_estado);
		  $qry->bindValue("nome_estado",$estado->nome_estado);
	      $qry->bindValue("uf_estado",$estado->uf_estado);
		  $qry->bindValue("codigo_estado",$estado->codigo_estado);
		  $qry->execute();
	  }
	   
	   //excluindo estado
	   public function excluir($id_estado){
		   
		   $sql="DELETE FROM estado WHERE id_estado =:id";
		   $qry = $this->db->prepare($sql);
		   $qry->bindValue(":id",$id_estado);
		   $qry->execute();
		   
	   }
	     public function lista(){
		$sql = "SELECT * FROM estado";
		$qry = $this->db->query($sql);
		return $qry->fetchAll(\PDO::FETCH_OBJ);
		
	
	}
}

 ?>
                