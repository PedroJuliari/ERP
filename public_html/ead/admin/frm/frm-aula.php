<?php

@$acao  = $_GET["acao"];
@$id  = $_GET["id"];

if($acao){
	$aula = consultar("aula","id_aula = $id");
	        @$txt_titulo_aula     =  $aula[0]["titulo_aula"] ;
	        @$txt_embed           =  $aula[0]["embed"] ;
	        @$txt_tipo_video      =  $aula[0]["tipo_video"] ;
	        @$txt_id_capitulo     =  $aula[0]["id_capitulo"] ;
			@$txt_id_modulo       =  $aula[0]["id_modulo"] ;
			@$txt_descricao       =  $aula[0]["descricao"] ;
			@$txt_duracao         =  $aula[0]["duracao"] ;
			@$txt_ativo_aula      =  $aula[0]["ativo_aula"] ;
		
	  
}                                             
?>
			
				<h2>CADASTRO DE AULA</h2>
				<div class="cx-form">
					<form action="op/op_aula.php" method="post">
						<label class="esq">
							<span>Módulos:</span>
							<select name="txt_id_modulo">
							<?php 
							$modulos = consultar("modulo","ativo_modulo = 'S'");
							foreach($modulos as $modulo){
								$cod_modulo = $modulo["id_modulo"];
							
							echo"<option value=$cod_modulo>$modulo[titulo_modulo]</option>";
							}
								?>
							</select>
						</label>
						<label class="dir">
							<span>Capitulo:</span>
							<select name="txt_id_capitulo"value="<?php echo @$txt_id_capitulo?>">
								<?php 
							$capitulos = consultar("capitulo","ativo_capitulo = 'S'");
							foreach($capitulos as $capitulo){
								$cod_capitulo = $capitulo["id_capitulo"];
							
							echo"<option value=$cod_capitulo>$capitulo[capitulo]</option>";
							}
								?>
								
								
							</select>
							
						</label>
						<label>
							<span>Título da aula</span>
							<input type="text" name="txt_titulo_aula"value="<?php echo @$txt_titulo_aula?>">
						</label>
						<label>
							<span>Código do embed</span>
							<input type="text" name="txt_embed"value="<?php echo @$txt_embed?>">
						</label>
						<label>
							<span>Típo de vídeo</span>
							<select name="txt_tipo_video">
								<option name="vimeo">vimeo</option>
								<option name="yotube">yotube</option>
								
							</select>
						</label>
						 <label class="esq">
							<span>Ativo S N:</span>
							<select name="txt_ativo_aula">
							<option value="S"><?php echo @$txt_ativo_aula?></option>
							<option value="N">N</option>
							<option value="S">S</option>
							
							</select>
						</label>	
						<label class="dir">
							<span>Duração:</span>
							<input type="text" name="txt_duracao"value="<?php echo @$txt_duracao?>">
						</label>
						<div class="limpar"></div>
						<label>
							<span>Texto:</span>
							<textarea rows="10"name="txt_descricao">Digite aqui</textarea>
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
			
		

	
