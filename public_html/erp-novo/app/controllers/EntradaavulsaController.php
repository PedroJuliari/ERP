<?php
namespace app\controllers;
use app\core\Controller;

class EntradaavulsaController extends Controller{ 
    
   public function index(){
      
       $dados["view"]       = "entrada/avulsa/Create";
       $this->load("template", $dados);
   } 
   
   
 
  
}
