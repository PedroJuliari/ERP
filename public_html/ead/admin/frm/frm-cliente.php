
<?php

@$acao  = $_GET["acao"];
@$id  = $_GET["id"];

if($acao){
	$cliente = consultar("cliente","id_cliente = $id");
	        @$txt_cliente=  $cliente[0]["nome"] ;
	        @$txt_endereco=  $cliente[0]["endereco"] ;
	        @$txt_bairro  =  $cliente[0]["bairro"] ;
	        @$txt_cidade  =  $cliente[0]["cidade"] ;
	        @$txt_cep     =  $cliente[0]["cep"] ;
	        @$txt_uf      =  $cliente[0]["estado"] ;
	        @$txt_cpf     =  $cliente[0]["cpf"] ;
	        @$txt_rg      =  $cliente[0]["rg"] ;
	        @$txt_fone    =  $cliente[0]["fone"] ;
	        @$txt_celular =  $cliente[0]["celular"] ;
	        @$txt_email   =  $cliente[0]["email"] ;
	        @$txt_senha   =  $cliente[0]["senha"] ;
	        @$txt_ativo   =  $cliente[0]["ativo_cliente"] ;
			@$txt_ultimo_acesso   =  $cliente[0]["ultimo_acesso"] ;
}                                             
?>
		
				<h2>CADASTRO DE CLIENTE</h2>
				<div class="cx-form">
					<div id="caixa">
						<p id="abas">
							<a href="#aba1" class="selected">Dados pessoais</a>
							<a href="#aba2">Configurações</a>
						</p>
						<ul id="conteudos">
							<li id="aba1">
								<form action="op/op_cliente.php" method="post">
									<label>
										<span>Nome:</span>
										<input type="text" name="txt_cliente" value="<?php echo @$txt_cliente?>">
									</label>
									<label>
										<span>Endereço:</span>
										<input type="text" name="txt_endereco" value="<?php echo @$txt_endereco?>">
									</label>
									<label class="esq">
										<span>Bairro:</span>
										<input type="text" name="txt_bairro" value="<?php echo @$txt_bairro?>">
									</label>
									<label class="dir">
										<span>Cep:</span>
										<input type="text" name="txt_cep" value="<?php echo @$txt_cep?>">
									</label>
									<label class="esq">
										<span>Cidade:</span>
										<input type="text" name="txt_cidade" value="<?php echo @$txt_cidade?>">
									</label>
									<label class="dir">
										<span>Estado:</span>
										<input type="text" name="txt_uf" value="<?php echo @$txt_uf?>">
									</label>
									<label class="esq">
										<span>CPF:</span>
										<input type="text" name="txt_cpf" value="<?php echo @$txt_cpf?>">
									</label>
									<label class="dir">
										<span>RG:</span>
										<input type="text" name="txt_rg" value="<?php echo @$txt_rg?>">
									</label>
									<label class="esq">
										<span>Fone:</span>
										<input type="text" name="txt_fone" value="<?php echo @$txt_fone?>">
									</label>
									  <label class="dir">
							        <span>Ativo S N:</span>
							        <select name="txt_ativo">
							        <option><?php echo @$txt_ativo?></option>
							        <option value="N">N</option>
							        <option value="S">S</option>
							
							</select>
						</label>
									
									<label class="esq">
										<span>Celular:</span>
										<input type="text" name="txt_celular" value="<?php echo @$txt_celular?>">
									</label>
									<div class="limpar"></div>
																	
							</li>
							
							<li id="aba2">
								<label>
										<span>Email:</span>
										<input type="text" name="txt_email" value="<?php echo @$txt_email?>">
									</label>
									<label class="esq">
										<span>Senha:</span>
										<input type="text" name="txt_senha" value="<?php echo @$txt_senha?>">
									</label>
									<label class="dir">
										<span>Último acesso:</span>
										<input type="text" name="txt_ultimo_acesso" value="<?php echo @$txt_ultimo_acesso?>">
									</label>
								
							</li>
							<label>
							<input type="hidden" name="id" value="<?php echo @$id?>">
							<input type="hidden" name="iipara" value="">
							<input type="hidden" name="acao" value="<?php if(@$acao!=""){echo $acao;}else{echo"Cadastrar";}?>">
								<input type="submit" name="" value="<?php if(@$acao!=""){echo $acao;}else{echo"Cadastrar";}?>" class="but">
							</label>
							</form>
						</ul>
					</div>
				</div>				
			
		
		
