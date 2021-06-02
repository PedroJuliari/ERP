<?php
namespace app\controllers;
use app\core\Controller;

class ContareceberController extends Controller{ 
    
    public function index(){
       $dados["view"]           = "Contareceber/Index";
       $this->load("template", $dados);
   } 
   
   
   

}
