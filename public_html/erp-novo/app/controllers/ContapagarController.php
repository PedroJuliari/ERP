<?php
namespace app\controllers;
use app\core\Controller;
class ContapagarController extends Controller{ 
    
   public function index(){
       
        $dados["view"]      = "Contapagar/Index";
        $this->load("template", $dados);
   } 
   
 
 
}
