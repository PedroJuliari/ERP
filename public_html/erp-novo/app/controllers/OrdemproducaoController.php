<?php
namespace app\controllers;
use app\core\Controller;

class OrdemproducaoController extends Controller{ 
    
   public function index($status=null){
       $dados["view"]       = "ordemproducao/Index";
       $this->load("template", $dados);
   } 
   
   
}
