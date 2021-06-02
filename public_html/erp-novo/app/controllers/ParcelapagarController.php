<?php
namespace app\controllers;
use app\core\Controller;


class ParcelapagarController extends Controller{ 
    
    public function index(){
       $dados["view"]           = "recebimento/Index";
       $this->load("template", $dados);
   } 

}
