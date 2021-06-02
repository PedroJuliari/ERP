<?php
namespace app\controllers;
use app\core\Controller;

class SolicitacaoController extends Controller{ 
    
   public function index($status=null){     
        $dados["view"]      = "Solicitacao/Index";
        $this->load("template", $dados);
   } 

}
