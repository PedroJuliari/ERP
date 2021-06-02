<?php

@$acao  = $_GET["acao"];
@$id  = $_GET["id"];

if($acao){
	  $capitulo   = consultar("capitulo","id_capitulo = $id");
	        @$txt_id_modulo              =  $capitulo[0]["id_modulo"] ;
	        @$txt_capitulo               =  $capitulo[0]["capitulo"] ;
	        @$txt_ativo_capitulo           =  $capitulo[0]["ativo_capitulo"] ;
	        
	       
	     
}                                             
?>
				<h2>CADASTRO DE CURSO</h2>
				<div class="cx-form">
					<form action="op/op_capitulo.php" method="post">
						<label class="esq">
							<span>Módulos:</span>
							<select name="txt_modulo">
							<?php 
							$modulos = consultar("modulo","ativo_modulo = 'S'");
							foreach($modulos as $modulo){
								$cod_modulo = $modulo["id_modulo"];
							
							echo"<option value=$cod_modulo>$modulo[titulo_modulo]</option>";
							}
								?>
							</select>
						</label>
						
						<label>
							<span>Capitulo</span>
							<input type="text" name="txt_capitulo"value="<?php echo @$txt_capitulo?>">
						</label>
                        <label class="esq">
							<span>Ativo S N:</span>
							<select name="txt_ativo_capitulo">
							<option value="S"><?php echo @$txt_ativo_capitulo?></option>
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
