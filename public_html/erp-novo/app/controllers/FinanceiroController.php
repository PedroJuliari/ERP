<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Ordemcompra;
use app\models\Statusordemcompra;
use app\models\Itemordemcompra;
use app\models\Fornecedor;
use app\models\Formapagto;

class FinanceiroController extends Controller{ 
  
   
   public function listaordemcompra(){
       $dados["view"]       = "Financeiro/Ordemcompra/Index";
       $this->load("template", $dados);
   }
   
   
  
  
}
