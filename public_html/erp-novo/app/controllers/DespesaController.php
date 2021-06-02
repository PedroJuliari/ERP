<?php
namespace app\controllers;
use app\core\Controller;

class DespesaController extends Controller{ 
    
   public function index(){
        $dados["view"]      = "Despesa/Index";
        $this->load("template", $dados);
   } 
 
}
