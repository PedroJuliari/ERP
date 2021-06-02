<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Config;

class HomeController extends Controller{ 

public function __construct(){
	$objConfig = new Config();
	
	if(!isset($_SESSION["usuariologado"])){
	header("location:".URL_BASE."login");
	}
	$objConfig->getConfig();
}
    
   public function index(){
        $dados["view"] = "home";
       $this->load("template", $dados);
   } 
   public function mudarLayout($layout){
	   $objConfig = new Config();
	   $objConfig->mudarLayout($layout);
	   
   }
   
 
}
