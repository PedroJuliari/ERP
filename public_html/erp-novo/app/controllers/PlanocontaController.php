<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Planoconta;

class PlanocontaController extends Controller{ 
    
   public function index(){
       $dados["view"] = "planoconta/Index";
       $this->load("template", $dados);
   } 
   
 
}
