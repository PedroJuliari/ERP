<?php
namespace app\controllers;
use app\core\Controller;

class LivrodiarioController extends Controller{ 
    
   public function index(){
       $dados["view"]       = "Livrodiario/Index";
       $this->load("template", $dados);
   }    
  
   
}
