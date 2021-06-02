
<?php

@$acao  = $_GET["acao"];
@$id  = $_GET["id"];

if($acao){
	  $produto   = consultar("produto","id_produto = $id");
	        @$txt_produto     =  $produto[0]["produto"] ;
	        @$txt_urlpg       =  $produto[0]["url_pagamento"] ;
	        @$txt_descricao   =  $produto[0]["descricao"] ;
	        @$txt_ativo       =  $produto[0]["ativo"] ;
	     
}                                             
?>

<h2>CADASTRO DE PRODUTO</h2>
				<div class="cx-form">
					<form action="op/op_produto.php" method="post">
						<label class="esq">
							        <span>Ativo S N:</span>
							        <select name="txt_ativo">
							        <option><?php echo @$txt_ativo?></option>
							        <option value="N">N</option>
							        <option value="S">S</option>
							
							</select>
						</label>
						
						
						<label>
							<span>PRODUTO</span>
							<input type="text"name="txt_produto" value="<?php echo @$txt_produto?>">
						</label>	
                        <label>
							<span>LINK DE PAGAMENTO</span>
							<input type="text"name="txt_urlpg" value="<?php echo @$txt_urlpg?>">
						</label>
                        <label>
							<span>Descrição</span>
							<input type="text"name="txt_descricao" value="<?php echo @$txt_descricao?>">
						</label>						
						<div class="limpar"></div>
						<label>
							<input type="hidden" name="id" value="<?php echo @$id?>">
							<input type="hidden" name="iipara" value="">
							<input type="hidden" name="acao" value="<?php if(@$acao!=""){echo $acao;}else{echo"Cadastrar";}?>">
								<input type="submit" name="" value="<?php if(@$acao!=""){echo $acao;}else{echo"Cadastrar";}?>" class="but">
							</label>
					</form>
				</div>				