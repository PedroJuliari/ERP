
			<?php

@$acao  = $_GET["acao"];
@$id  = $_GET["id"];

if($acao){
	  $modulo   = consultar("modulo","id_modulo = $id");
	        @$txt_modulo             =  $modulo[0]["titulo_modulo"] ;
	        @$txt_ativo_modulo       =  $modulo[0]["ativo_modulo"] ;
	     
}                                             
?>

				<h2>CADASTRO DE MÓDULOS</h2>
				<div class="cx-form">
					<form action="op/op_modulo.php" method="post">
						<label>
							<span>Título do módulo</span>
							<input type="text" name="txt_modulo" value="<?php echo @$txt_modulo?>">
						</label>
						
						<label class="esq">
							        <span>Ativo S N:</span>
							        <select name="txt_ativo_modulo">
							        <option><?php echo @$txt_ativo_modulo?></option>
							        <option value="N">N</option>
							        <option value="S">S</option>
							
							</select>
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
	