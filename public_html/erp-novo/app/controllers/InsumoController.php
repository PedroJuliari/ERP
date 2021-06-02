<?php
namespace app\controllers;
use app\core\Controller;

class InsumoController extends Controller{ 
    
   public function index(){
       $dados["view"]       = "producao/insumo/Index";
       $this->load("template", $dados);
   } 
   
  
}
