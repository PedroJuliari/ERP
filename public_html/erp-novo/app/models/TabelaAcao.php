<?php 
  namespace app\models;
  use app\core\Model;

class TabelaAcao extends Model{
	
	   public function filtro($pesquisa, $inicio,$lpp){
		$complemento="";
		$sql = "SELECT * FROM usuario_tabela_acao WHERE 1";
		
		if ($pesquisa->id_tabela){
			$complemento .="AND id_tabela like '%".$pesquisa->id_tabela."%'";
		}
			if ($pesquisa->id_acao){
			$complemento .="AND id_acao like '%".$pesquisa->id_acao."%'";
		}
		
		
		$sql .=$complemento ." LIMIT $inicio, $lpp ";
		
		$qry = $this->db->query($sql);
		return $qry->fetchAll(\PDO::FETCH_OBJ);
	
	}
	
	
	    public function getListaPorTabela($id_tabela){
			
			$sql ="SELECT * FROM usuario_tabela_acao ta, usuario_tabela t, usuario_acao a
			WHERE ta.id_tabela = t.id_tabela AND
			ta.id_acao = a.id_acao AND ta.id_tabela = :id_tabela";
			$qry = $this->db->prepare($sql);
			$qry->bindValue(":id_tabela",$id_tabela);
		    $qry->execute();
			
			return $qry->fetchALL(\PDO::FETCH_OBJ);
		}
	
        public function getTabelaAcao($id_tabela,$id_acao){
			
			$sql ="SELECT * FROM usuario_tabela_acao WHERE id_tabela = :id_tabela AND id_acao = :id_acao";
			$qry = $this->db->prepare($sql);
			$qry->bindValue(":id_tabela",$id_tabela);
			$qry->bindValue(":id_acao",$id_acao);
		    $qry->execute();
			
			return $qry->fetch(\PDO::FETCH_OBJ);
		}
		
		


      public function inserir($id_tabela,$id_acao){
		  
		  $sql="INSERT INTO usuario_tabela_acao SET
		  id_tabela         =:id_tabela,
		  id_acao            =:id_acao
		 
		 ";
		  
		 $qry = $this->db->prepare($sql);
		 
	      $qry->bindValue(":id_tabela",$id_tabela);
		  $qry->bindValue(":id_acao",$id_acao);
	
		  $qry->execute();
		  
		  return $this->db->lastInsertId();
		  
		  
	  }
	  public function editar($id_tabela, $id_acao){
		  
		  $sql="UPDATE usuario_tabela_acao SET
		 id_tabela =:id_tabela, id_acao  =:id_acao 
		 WHERE id_tabela  =:id_tabela 
		 AND id_acao =:id_acao
		  ";
		  
		  $qry = $this->db->prepare($sql);
		 
	      $qry->bindValue(":id_tabela",$id_tabela);
		  $qry->bindValue(":id_acao",$id_acao);
	
		  $qry->execute();
	  }
	   
	   //excluindo usuario_tabela_acao
	   public function excluir($id_tabela, $id_acao){
		   
		   $sql="DELETE FROM usuario_tabela_acao 
		    WHERE id_tabela =:id_tabela AND id_acao = :id_acao
		  ";
		 $qry = $this->db->prepare($sql);
		 
	      $qry->bindValue(":id_tabela",$id_tabela);
		  $qry->bindValue(":id_acao",$id_acao);
		
	
		  $qry->execute();
		   
	   }
	      public function lista(){
		$sql = "SELECT * FROM usuario_tabela_acao";
		$qry = $this->db->query($sql);
		return $qry->fetchAll(\PDO::FETCH_OBJ);
		
	
	}
}

 ?>
                