<?php
namespace app\controllers;
use app\core\Controller;




class PedidoController extends Controller{ 
    
    public function index($status=null){
	
       $dados["view"]		= "Pedido/Index";
       $this->load("template", $dados);	   
     
   } 
   
   
}
