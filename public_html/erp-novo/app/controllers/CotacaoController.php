<?php
namespace app\controllers;
use app\core\Controller;


class CotacaoController extends Controller{ 
    
   public function index($status=null){
      
        $dados["view"]      = "Cotacao/Index";
        $this->load("template", $dados);
   } 

 
   
}
