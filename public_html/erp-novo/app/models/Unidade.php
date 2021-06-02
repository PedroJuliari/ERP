<?php 
  namespace app\models;
  use app\core\Model;

class Unidade extends Model{
	
	
	public function filtro($pesquisa, $inicio,$lpp){
		$complemento="";
		$sql = "SELECT * FROM unidade WHERE 1";
		
		if ($pesquisa->unidade){
			$complemento .="AND unidade like '%".$pesquisa->unidade."%'";
		}
		if ($pesquisa->abrev){
			$complemento .="AND abrev like '%".$pesquisa->abrev."%'";
		}
		
		$sql .=$complemento ." LIMIT $inicio, $lpp ";
		
		$qry = $this->db->query($sql);
		return $qry->fetchAll(\PDO::FETCH_OBJ);
	
	}
	
	public function getTotal($pesquisa=null){
		$complemento="";
		$sql = "SELECT count(*)as total FROM unidade WHERE 1";
		
		if ($pesquisa->unidade){
			$complemento .="AND unidade like '%".$pesquisa->unidade."%'";
		}
		if ($pesquisa->abrev){
			$complemento .="AND abrev like '%".$pesquisa->abrev."%'";
		}
		
		
		
		$qry = $this->db->query($sql . $complemento);
		return $qry->fetch(\PDO::FETCH_OBJ)->total;
	
	
}

        public function getUnidade($id_unidade){
			
			$sql ="SELECT * FROM unidade WHERE id_unidade = :id";
			$qry = $this->db->prepare($sql);
			$qry->bindValue(":id",$id_unidade);
		    $qry->execute();
			
			return $qry->fetch(\PDO::FETCH_OBJ);
		}


      public function inserir ($unidade){
		  
		  $sql="INSERT INTO unidade SET
		  unidade          =:unidade,
		  abrev          =:abrev
		  ";
		  
		 $qry = $this->db->prepare($sql);
		 
	      $qry->bindValue(":unidade",$unidade->unidade);
		  $qry->bindValue(":abrev",$unidade->abrev);
		  $qry->execute();
		  
		  return $this->db->lastInsertId();
		  
		  
	  }
	  public function editar($unidade){
		  
		  $sql="UPDATE unidade SET
		  unidade          =:unidade,
		  abrev          =:abrev
		  WHERE id_unidade = :id
		  ";
		  
		  $qry = $this->db->prepare($sql);
		  
		  $qry->bindValue(":id",$unidade->id_unidade);
	      $qry->bindValue(":unidade",$unidade->unidade);
		  $qry->bindValue(":abrev",$unidade->abrev);
		
		  $qry->execute();
	  }
	   
	   //excluindo unidade
	   public function excluir($id_unidade){
		   
		   $sql="DELETE FROM unidade WHERE id_unidade =:id";
		   $qry = $this->db->prepare($sql);
		   $qry->bindValue(":id",$id_unidade);
		   $qry->execute();
		   
	   }
	   public function lista(){
		$sql = "SELECT * FROM unidade";
		$qry = $this->db->query($sql);
		return $qry->fetchAll(\PDO::FETCH_OBJ);
		
	
	}
}

 ?>
                