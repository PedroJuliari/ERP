<?php 
require("../include/config.php");
require("../include/crud.php");

    $nome = $_POST["txt_nome"];
    $email  = $_POST["txt_email"];
	$id_produto  = $_POST["id_produto"];
	$data = date("Y-m-d");
	
	$dados = array(
			   "nome"=>$nome,
			   "email"=>$email,
			   "data_cadastro"=>$data
			   );

       if(($nome)&&($email)){
		   $cliente= consultar("cliente","email='$email'");
		   if(!$cliente){
			   
			 $id_cliente = inserir("cliente", $dados, true );
			   
		   }else{
			   echo"já está cadastrado este cliente tente outro";
		   }
	   }else{
		   echo"falta dados";
	   }
	   if($id_cliente)
		   inserir("venda",array("id_produto"=>$id_produto,
	                               "id_cliente"=>$id_cliente,
								     "data_compra"=>$data,
									     "pago"=>"N"));
										    //header("location:"URL_BASE);//aqui coloque a url de pagamento
		                                    
	                                                  else
													 
	                                                              //header("location:"URL_BASE);}





?>