<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Login;
use app\models\Config;

class LoginController extends Controller{ 
    
   public function index(){
	     $objConfig = new Config();
	   
	   $erro="";
	   
	   $login = isset ($_POST["txt_login"])?strip_tags(filter_input(INPUT_POST,"txt_login")):null;
       $senha = isset ($_POST["txt_senha"])?strip_tags(filter_input(INPUT_POST,"txt_senha")):null;
	   $objConfig->getConfig();
       $objLogin = new Login();
	   if(($login)&&($senha)){
		   
		   if($objLogin->logar($login,$senha)){
			   
			   $objConfig = new Config();
			   
			   header("location:".URL_BASE);
			   EXIT;
		   }else{
			 $erro= "Usuario e senha errado...";
		   }
		   
	   }
	   
      $dados["erro"]=$erro;
       $this->load("v_login", $dados);

   }
   public function logoff(){
	   unset($_SESSION["usuariologado"]);
	   header("location:".URL_BASE."login");
   }
   
 
}
