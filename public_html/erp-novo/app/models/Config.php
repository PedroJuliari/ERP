<?php 
  namespace app\models;
  use app\core\Model;

class Config extends Model{
	
	public function getConfig(){
		
		$sql = "SELECT * FROM config WHERE id_config = 1";
			$qry = $this->db->query($sql);
			$retorno = $qry->fetch(\PDO::FETCH_OBJ);
			$_SESSION["CONFIG"] = $retorno;
			return $retorno;
			
		
			
      }
	  public function mudarLayout($layout){
		  $layout = "tema-".$layout;
		  $sql = "UPDATE config SET layout='$layout' WHERE id_config = 1";
		  $qry=$this->db->query($sql);
		  $this->getConfig();
	  }
	
}

 ?>
                