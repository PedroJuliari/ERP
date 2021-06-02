<?php 
  namespace app\models;
  use app\core\Model;

class Permissao extends Model{
	
	
	
        public function getPermissao($id_usuario,$id_tabela,$id_acao){
			
			$sql ="SELECT * FROM usuario_tabela_acao_cliente WHERE id_usuario = :id_usuario AND id_tabela = :id_tabela AND id_acao = :id_acao";
			$qry = $this->db->prepare($sql);
			$qry->bindValue(":id_usuario",$id_usuario);
			$qry->bindValue(":id_tabela",$id_tabela);
			$qry->bindValue(":id_acao",$id_acao);
		    $qry->execute();
			
			return $qry->fetch(\PDO::FETCH_OBJ);
		}
		//permissao
		 public function temPermissao($id_usuario,$alias_tabela,$alias_acao=null){
			 $tem = $this->getTemPermissaoPorAlias($id_usuario,$alias_tabela,$alias_acao);
			 if(!$tem){
				  header("location:".URL_BASE."permissao/sem_permissao");
				 
			 }
			 
			 
		 }
		//ALIAS
		   public function getTemPermissaoPorAlias($id_usuario,$alias_tabela,$alias_acao=null){
			
			$sql ="SELECT * FROM usuario_tabela_acao_cliente tac, usuario_tabela t,usuario_acao a
			WHERE tac.id_tabela = t.id_tabela 
		    AND tac.id_acao = a.id_acao
			AND tac.id_usuario ='$id_usuario'
			AND alias_tabela = '$alias_tabela'";
			
			if($alias_acao){
				$sql.="AND alias_acao ='$alias_acao'";
			}
			
			 $qry = $this->db->query($sql);
			return $qry->fetch(\PDO::FETCH_OBJ);
		}
		
		


      public function inserir($id_usuario, $id_tabela,$id_acao){
		  
		  $sql="INSERT INTO usuario_tabela_acao_cliente SET
		  id_usuario         =:id_usuario,
		  id_tabela         =:id_tabela,
		  id_acao            =:id_acao
		 
		 ";
		  
		 $qry = $this->db->prepare($sql);
		 
	      $qry->bindValue(":id_usuario",$id_usuario);
		  $qry->bindValue(":id_tabela",$id_tabela);
		  $qry->bindValue(":id_acao",$id_acao);
	
		  $qry->execute();
		  
		  return $this->db->lastInsertId();
		  
		  
	  }
	 
	   
	   //excluindo usuario_tabela_acao
	   public function excluir($id_usuario, $id_tabela, $id_acao){
		   
		   $sql="DELETE FROM usuario_tabela_acao_cliente 
		    WHERE id_usuario =:id_usuario AND id_tabela =:id_tabela AND id_acao = :id_acao
		  ";
		 $qry = $this->db->prepare($sql);
		  $qry->bindValue(":id_usuario",$id_usuario);
	      $qry->bindValue(":id_tabela",$id_tabela);
		  $qry->bindValue(":id_acao",$id_acao);
		
	
		  $qry->execute();
		   
	   }
	      public function lista(){
		$sql = "SELECT * FROM usuario_tabela_acao_cliente";
		$qry = $this->db->query($sql);
		return $qry->fetchAll(\PDO::FETCH_OBJ);
		
	
	}
}

 ?>
                