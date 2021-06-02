<?php
namespace app\controllers;
use app\core\Controller;


class OrdemcompraController extends Controller{ 
    
   public function index(){       
      
       $dados["view"]       = "Ordemcompra/Index";
       $this->load("template", $dados);
   } 
   
   
    
  
}
