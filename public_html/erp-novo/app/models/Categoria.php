<?php 
  namespace app\models;
  use app\core\Model;

class Categoria extends Model{
	
	

	
	public function filtro($pesquisa, $inicio,$lpp){
		$complemento="";
		$sql = "SELECT * FROM categoria WHERE 1";
		
		if ($pesquisa->categoria){
			$complemento .="AND categoria like '%".$pesquisa->categoria."%'";
		}
		if ($pesquisa->ativo_categoria){
			$complemento .="AND ativo_categoria = '".$pesquisa->ativo_categoria."'";
		}
		
		$sql .=$complemento ." LIMIT $inicio, $lpp ";
		
		$qry = $this->db->query($sql);
		return $qry->fetchAll(\PDO::FETCH_OBJ);
	
	}
	
	public function getTotal($pesquisa=null){
		$complemento="";
		$sql = "SELECT count(*)as total FROM categoria WHERE 1";
		
		if ($pesquisa->categoria){
			$complemento .="AND categoria like '%".$pesquisa->categoria."%'";
		}
		if ($pesquisa->ativo_categoria){
			$complemento .="AND ativo_categoria =".$pesquisa->ativo_categoria."'";
		}
		
		
		
		$qry = $this->db->query($sql . $complemento);
		return $qry->fetch(\PDO::FETCH_OBJ)->total;
	
	
}

        public function getCategoria($id_categoria){
			
			$sql ="SELECT * FROM categoria WHERE id_categoria = :id";
			$qry = $this->db->prepare($sql);
			$qry->bindValue(":id",$id_categoria);
		    $qry->execute();
			
			return $qry->fetch(\PDO::FETCH_OBJ);
		}


      public function inserir($categoria){
		  
		  $sql="INSERT INTO categoria SET
		  categoria          =:categoria,
		  ativo_categoria    =:ativo_categoria 
	
		  ";
		  
		 $qry = $this->db->prepare($sql);
		 
	      $qry->bindValue(":categoria",$categoria->categoria);
		  $qry->bindValue(":ativo_categoria",$categoria->ativo_categoria);
	
		  $qry->execute();
		  
		  return $this->db->lastInsertId();
		  
		  
	  }
	  public function editar($categoria){
		  
		  $sql="UPDATE categoria SET
		  categoria          =:categoria,
		  ativo_categoria    =:ativo_categoria 
		  WHERE id_categoria = :id
		  ";
		  
		  $qry = $this->db->prepare($sql);
		  
		  $qry->bindValue(":id",$categoria->id_categoria);
	      $qry->bindValue(":categoria",$categoria->categoria);
		  $qry->bindValue(":ativo_categoria",$categoria->ativo_categoria);
		 
		  $qry->execute();
	  }
	   
	   //excluindo Categoria
	   public function excluir($id_categoria){
		   
		   $sql="DELETE FROM categoria WHERE id_categoria =:id";
		   $qry = $this->db->prepare($sql);
		   $qry->bindValue(":id",$id_categoria);
		   $qry->execute();
		   
	   }
	     public function lista(){
		$sql = "SELECT * FROM categoria";
		$qry = $this->db->query($sql);
		return $qry->fetchAll(\PDO::FETCH_OBJ);
		
	
	}
}

 ?>
                