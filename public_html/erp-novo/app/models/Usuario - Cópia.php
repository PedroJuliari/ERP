<?php 
  namespace app\models;
  use app\core\Model;

class Usuario extends Model{
	
	public function filtro($pesquisa, $inicio,$lpp){
		$complemento="";
		$sql = "SELECT * FROM usuario WHERE 1";
		
		if ($pesquisa->login){
			$complemento .="AND login like '%".$pesquisa->login."%'";
		}
		if ($pesquisa->email){
			$complemento .="AND email like '%".$pesquisa->email."%'";
		}
		
		$sql .=$complemento ." LIMIT $inicio, $lpp ";
		
		$qry = $this->db->query($sql);
		return $qry->fetchAll(\PDO::FETCH_OBJ);
	
	}
	
	public function getTotal($pesquisa=null){
		$complemento="";
		$sql = "SELECT count(*)as total FROM usuario WHERE 1";
		
		if ($pesquisa->login){
			$complemento .="AND login like '%".$pesquisa->login."%'";
		}
		if ($pesquisa->email){
			$complemento .="AND email like '%".$pesquisa->email."%'";
		}
		
		
		
		$qry = $this->db->query($sql . $complemento);
		return $qry->fetch(\PDO::FETCH_OBJ)->total;
	
	
}

        public function getUsuario($id_usuario){
			
			$sql ="SELECT * FROM usuario WHERE id_usuario = :id";
			$qry = $this->db->prepare($sql);
			$qry->bindValue(":id",$id_usuario);
		    $qry->execute();
			
			return $qry->fetch(\PDO::FETCH_OBJ);
		}


      public function inserir ($usuario){
		  
		  $sql="INSERT INTO usuario SET
		  login          =:login,
		  senha          =:senha, 
		  email          =:email, 
		  administrador  =:administrador, 
		  data_cadastro  =:data_cadastro,
		  data_acesso    =:data_acesso,
		  hora_acesso    =:hora_acesso 
		  ";
		  
		 $qry = $this->db->prepare($sql);
		 
	      $qry->bindValue(":login",$usuario->login);
		  $qry->bindValue(":senha",$usuario->senha);
		  $qry->bindValue(":email",$usuario->email);
		  $qry->bindValue(":administrador",$usuario->administrador);
		  $qry->bindValue(":data_cadastro",date("Y-m-d"));
		  $qry->bindValue(":data_acesso",date("Y-m-d"));
		  $qry->bindValue(":hora_acesso",date("H-i-s"));
		  $qry->execute();
		  
		  return $this->db->lastInsertId();
		  
		  
	  }
	  public function editar($usuario){
		  
		  $sql="UPDATE usuario SET
		  login          =:login,
		  senha          =:senha, 
		  email          =:email, 
		  administrador  =:administrador 
		  WHERE id_usuario = :id
		  ";
		  
		  $qry = $this->db->prepare($sql);
		  
		  $qry->bindValue(":id",$usuario->id_usuario);
	      $qry->bindValue(":login",$usuario->login);
		  $qry->bindValue(":senha",$usuario->senha);
		  $qry->bindValue(":email",$usuario->email);
		  $qry->bindValue(":administrador",$usuario->administrador);
		  $qry->execute();
	  }
	   
	   //excluindo usuario
	   public function excluir($id_usuario){
		   
		   $sql="DELETE FROM usuario WHERE id_usuario =:id";
		   $qry = $this->db->prepare($sql);
		   $qry->bindValue(":id",$id_usuario);
		   $qry->execute();
		   
	   }
}

 ?>
                