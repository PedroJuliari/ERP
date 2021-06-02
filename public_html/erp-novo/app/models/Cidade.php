<?php 
  namespace app\models;
  use app\core\Model;

class Cidade extends Model{
	
	public function filtro($pesquisa, $inicio,$lpp){
		$complemento="";
		//$sql = "SELECT * FROM cidade c, estado e WHERE c.id_estado = e.id_estado";
		$sql = "SELECT * FROM cidade  WHERE 1";
		
		if ($pesquisa->nome_cidade){
			$complemento .="AND nome_cidade like '%".$pesquisa->nome_cidade."%'";
		}
		if ($pesquisa->ibge_cidade){
			$complemento .="AND ibge_cidade like '%".$pesquisa->ibge_cidade."%'";
		}
		if ($pesquisa->id_estado){
			$complemento .="AND id_estado =".$id_estado;
		}
		

		$sql .=$complemento ." LIMIT $inicio, $lpp ";
		
		$qry = $this->db->query($sql);
		return $qry->fetchAll(\PDO::FETCH_OBJ);
	
	}
	
	public function getTotal($pesquisa=null){
		$complemento="";
		//$sql = "SELECT count(*)as total FROM cidade c, estado e WHERE c.id_estado = e.id_estado";
		$sql = "SELECT count(*)as total FROM cidade  WHERE 1";
		
		if ($pesquisa->nome_cidade){
			$complemento .="AND nome_cidade like '%".$pesquisa->nome_cidade."%'";
		}
		if ($pesquisa->ibge_cidade){
			$complemento .="AND ibge_cidade like '%".$pesquisa->ibge_cidade."%'";
		}
		if ($pesquisa->id_estado){
			$complemento .="AND id_estado like '%".$pesquisa->id_estado."%'";
		}
		

		$qry = $this->db->query($sql . $complemento);
		return $qry->fetch(\PDO::FETCH_OBJ)->total;
	
	
}

        public function getcidade($id_cidade){
			
			$sql ="SELECT * FROM cidade c, estado e WHERE c.id_estado = e.id_estado AND id_cidade =:id";
			$qry = $this->db->prepare($sql);
			$qry->bindValue(":id",$id_cidade);
		    $qry->execute();
			
			return $qry->fetch(\PDO::FETCH_OBJ);
		}
		 public function getListaPorIdEstado($id_estado){
			
			$sql ="SELECT * FROM cidade c, estado e WHERE c.id_estado = e.id_estado AND c.id_estado = :id";
			$qry = $this->db->prepare($sql);
			$qry->bindValue(":id",$id_estado);
		    $qry->execute();
			
			return $qry->fetchALL(\PDO::FETCH_OBJ);
		}

//inserir
      public function salvar($cidade){
		$sql="INSERT INTO cidade SET
		id_estado	=:id, 
		nome_cidade =:cidade, 
		ibge_cidade =:ibge";
		  
		  $qry = $this->db->prepare($sql);
		  $qry->bindValue(":id  ",$cidade->id_estado);
		  $qry->bindValue(":cidade",$cidade->nome_cidade);
		  $qry->bindValue(":ibge",$cidade->ibge_cidade);
		 
		  $qry->execute();
		  
		  return $this->db->lastInsertId();
		  
		  
	  }
	  
 //editar
	  public function editar($cidade){
		  
		  $sql="UPDATE cidade SET
		  id_cidade    =:id_cidade,  
		  id_estado	   =:id_estado,	
		  nome_cidade  =:nome_cidade,
		  ibge_cidade  =:ibge_cidade, 
		  WHERE id_cidade = :id
		  ";
		  
		  $qry = $this->db->prepare($sql);
		  
		  $qry->bindValue(":id_cidade"   ,$cidade->id_cidade  );
	      $qry->bindValue(":id_estado	",$cidade->id_estado	);
		  $qry->bindValue(":nome_cidade" ,$cidade->nome_cidade);
		  $qry->bindValue(":ibge_cidade" ,$cidade->ibge_cidade);
		 
		  $qry->execute();
	  }
	   
	   //excluindo cidade
	   public function excluir($id_cidade){
		   
		   $sql="DELETE FROM cidade WHERE id_cidade =:id";
		   $qry = $this->db->prepare($sql);
		   $qry->bindValue(":id",$id_cidade);
		   $qry->execute();
		   
	   }
	     public function lista(){
		$sql = "SELECT * FROM cidade";
		$qry = $this->db->query($sql);
		return $qry->fetchAll(\PDO::FETCH_OBJ);
		
	
	}
}

 ?>
                