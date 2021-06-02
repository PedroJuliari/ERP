<?php
namespace app\controllers;
use app\core\Controller;

class NotafiscalController extends Controller{ 
    
    public function index(){      
       $dados["view"] 	= "NFE/Index";
       $this->load("template", $dados);
    }
   
  
 
}
