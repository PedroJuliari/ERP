<?php 
  namespace app\models;
  use app\core\Model;

class Acao extends Model{
	
	public function filtro($pesquisa, $inicio,$lpp){
		$complemento="";
		$sql = "SELECT * FROM usuario_acao WHERE 1";
		
		if ($pesquisa->acao){
			$complemento .="AND acao like '%".$pesquisa->acao."%'";
		}
		
		
		$sql .=$complemento ." LIMIT $inicio, $lpp ";
		
		$qry = $this->db->query($sql);
		return $qry->fetchAll(\PDO::FETCH_OBJ);
	
	}
	
	public function getTotal($pesquisa=null){
		$complemento="";
		$sql = "SELECT count(*)as total FROM usuario_acao WHERE 1";
		
		if ($pesquisa->acao){
			$complemento .="AND acao like '%".$pesquisa->acao."%'";
		}
		
		
		
		$qry = $this->db->query($sql . $complemento);
		return $qry->fetch(\PDO::FETCH_OBJ)->total;
	
	
}

        public function getAcao($id_acao){
			
			$sql ="SELECT * FROM usuario_acao WHERE id_acao = :id";
			$qry = $this->db->prepare($sql);
			$qry->bindValue(":id",$id_acao);
		    $qry->execute();
			
			return $qry->fetch(\PDO::FETCH_OBJ);
		}


      public function inserir ($acao){
		  
		  $sql="INSERT INTO usuario_acao SET
		  acao       =:acao
		  ";
		  
		 $qry = $this->db->prepare($sql);
		 
	      $qry->bindValue(":acao",$acao->acao);
		  $qry->execute();
		  
		  return $this->db->lastInsertId();
		  
		  
	  }
	  public function editar($acao){
		  
		  $sql="UPDATE usuario_acao SET
		  acao          =:acao
		  WHERE id_acao = :id
		  ";
		  
		  $qry = $this->db->prepare($sql);
		  
		  $qry->bindValue(":id",$acao->id_acao);
	      $qry->bindValue(":acao",$acao->acao);
		  $qry->execute();
	  }
	   
	   //excluindo usuario_acao
	   public function excluir($id_acao){
		   
		   $sql="DELETE FROM usuario_acao WHERE id_acao =:id";
		   $qry = $this->db->prepare($sql);
		   $qry->bindValue(":id",$id_acao);
		   $qry->execute();
		   
	   }
	        public function lista(){
		$sql = "SELECT * FROM usuario_acao";
		$qry = $this->db->query($sql);
		return $qry->fetchAll(\PDO::FETCH_OBJ);
		
	
	}
}

 ?>
                