<?php 
  namespace app\models;
  use app\core\Model;

class Login extends Model{
	
	public function logar($login, $senha){
		
		$sql = "SELECT * FROM usuario WHERE login = :login AND senha =:senha";
			$qry = $this->db->prepare($sql);
			$qry->bindValue(":login",$login);
			$qry->bindValue(":senha",$senha);
			
		    $qry->execute();
			if($qry->rowCount() >0){
				$_SESSION["usuariologado"]=$qry->fetch(\PDO::FETCH_OBJ);
				return true;
			}else{
				unset($_SESSION["usuariologado"]);
			return false;
			}
			
      }
}

 ?>
                