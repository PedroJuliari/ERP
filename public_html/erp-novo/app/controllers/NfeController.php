<?php
namespace app\controllers;
use app\core\Controller;

class NfeController extends Controller{ 
    
    public function index(){       
       $dados["view"] = "NFE/Index";
       $this->load("template", $dados);
   }
  
   
 
}
