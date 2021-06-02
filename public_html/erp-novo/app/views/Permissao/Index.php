<script type="text/javascript" src="<?php echo URL_BASE?>assets/js/js_permissao.js"></script>
<div class="conteudo-dividido bg-fundo">				
    <div class="conteudo-fluido">								

        <div class="rows">	
                <div class="col-12">
                <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Permissões Usuario:..<?php echo $usuario->login?></span>
                   
                </div>
                </div>

		<div class="col-12">
            <div class="caixa p-2">               
                <div class="caixa-colunas colunas3">	
					<?php foreach ($listas as $tabela){ ?>
					<div class="caixa">
					<div class="caixa-titulo"> <?php echo $tabela->tabela->nome_tabela ?></div>				
						
					<div class="p-1">
					<?php 
						foreach($tabela->acoes as $acao) {
							
					?>
						<div class="caixa p-3 mb-1">
							<div class="check">
								<input type="checkbox" onclick="inserirPermissao(<?php echo $usuario->id_usuario . ",". $tabela->tabela->id_tabela.",". $acao->id_acao . ",".$acao->id_tabela_acao ?>)" name="acao<?php echo $acao->id_tabela_acao ?>" id="acao<?php echo $acao->id_tabela_acao ?>" <?php echo ($acao->marcado) ? "checked" : "" ?>>
							
								<label for="acao<?php echo $acao->id_tabela_acao ?>"></label><span class="ml-2"><?php echo $acao->acao ?></span>
							</div>
						</div>	
					<?php } ?>
						
					</div>				
					</div>				
					
					<?php } ?>	
				</div>     
			</div>

                        <!-- qunado não hover pedido 

                        <div class="caixa p-2">
                                <div class="msg msg-verde">
                                <p><b><i class="fas fa-check"></i> Mensagem de boas vindas</b> Parabéns seu produto foi inserido com sucesso</p>
                                </div>
                                <div class="msg msg-vermelho">
                                <p><b><i class="fas fa-times"></i> Mensagem de Erro</b> Houve um erro</p>
                                </div>
                                <div class="msg msg-amarelo">
                                <p><b><i class="fas fa-exclamation-triangle"></i> Mensagem de aviso</b> Tem um aviso pra você</p>
                                </div>
                        </div>
                       -->
                </div>

        </div>
    </div>
</div>
