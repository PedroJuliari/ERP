<?php
namespace app\controllers;
use app\core\Controller;


class HistoricoController extends Controller{ 
    
   public function index(){ 
      
       $dados["view"]       = "Historico/Index";
       $this->load("template", $dados);
   } 
   

   
  
}
