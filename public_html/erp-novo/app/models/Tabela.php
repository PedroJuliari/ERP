<?php 
  namespace app\models;
  use app\core\Model;

class Tabela extends Model{
	
	public function filtro($pesquisa, $inicio,$lpp){
		$complemento="";
		$sql = "SELECT * FROM usuario_tabela WHERE 1";
		
		if ($pesquisa->nome_tabela){
			$complemento .="AND nome_tabela like '%".$pesquisa->nome_tabela."%'";
		}
		
		
		$sql .=$complemento ." LIMIT $inicio, $lpp ";
		
		$qry = $this->db->query($sql);
		return $qry->fetchAll(\PDO::FETCH_OBJ);
	
	}
	
	
	public function getTotal($pesquisa=null){
		$complemento="";
		$sql = "SELECT count(*)as total FROM usuario_tabela WHERE 1";
		
		if ($pesquisa->nome_tabela){
			$complemento .="AND nome_tabela like '%".$pesquisa->nome_tabela."%'";
		}
		
		
		
		$qry = $this->db->query($sql . $complemento);
		return $qry->fetch(\PDO::FETCH_OBJ)->total;
	
	
}

        public function getTabela($id_tabela){
			
			$sql ="SELECT * FROM usuario_tabela WHERE id_tabela = :id_tabela";
			$qry = $this->db->prepare($sql);
			$qry->bindValue(":id_tabela",$id_tabela);
		    $qry->execute();
			
			return $qry->fetch(\PDO::FETCH_OBJ);
		}


      public function inserir ($usuario_tabela){
		  
		  $sql="INSERT INTO usuario_tabela SET
		  nome_tabela          =:nome_tabela,
		  ativo_tabela    =:ativo_tabela 
		  ";
		  
		 $qry = $this->db->prepare($sql);
		 
	      $qry->bindValue(":nome_tabela",$usuario_tabela->nome_tabela);
		  $qry->bindValue(":ativo_tabela",$usuario_tabela->ativo_tabela);
	
		  $qry->execute();
		  
		  return $this->db->lastInsertId();
		  
		  
	  }
	  public function editar($usuario_tabela){
		  
		  $sql="UPDATE usuario_tabela SET
		  nome_tabela          =:nome_tabela,
		  ativo_tabela          =:ativo_tabela
		  WHERE id_tabela = :id
		  ";
		  
		  $qry = $this->db->prepare($sql);
		  
		  $qry->bindValue(":id",$usuario_tabela->id_tabela);
	      $qry->bindValue(":nome_tabela",$usuario_tabela->nome_tabela);
		  $qry->bindValue(":ativo_tabela",$usuario_tabela->ativo_tabela);
		  $qry->execute();
	  }
	   
	   //excluindo usuario_tabela
	   public function excluir($id_tabela){
		   
		   $sql="DELETE FROM usuario_tabela WHERE id_tabela =:id";
		   $qry = $this->db->prepare($sql);
		   $qry->bindValue(":id",$id_tabela);
		   $qry->execute();
		   
	   }
	      public function lista(){
		$sql = "SELECT * FROM usuario_tabela";
		$qry = $this->db->query($sql);
		return $qry->fetchAll(\PDO::FETCH_OBJ);
		
	
	}
}

 ?>
                