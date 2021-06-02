<script type="text/javascript" src="<?php echo URL_BASE ?>/assets/js/js_saida.js"></script>
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">	
    <div class="rows">	
         <div class="col-12">
            <div class="caixa">
					<div class="caixa-titulo py-1 d-inline-block width-100">
                            <span class="h5 mb-0 d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Ordem de Produção</span>							
                            <a href="<?php echo URL_BASE ."produto" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                    </div>
            
					<div class="rows p-4"> 
							
							<div class="col-12 px-2">
							   <div class="rows">
									<?php if($erros){ 
										echo "<div class='col-12'><span class='msg msg-vermelho d-block'><i class='fas fa-exclamation-triangle h4 mb-0'></i>  Existem $erros itens com falta de estoque, por favor providencie a compra dos mesmos  </span></div>;";
									}else{
										echo "<div class='col-12'><span class='msg msg-verde d-block'><i class='fas fa-check'></i> Todos os produtos necessários para a produção existem no estoque, clique no botão pra iniciar e autorizar a produção</span></div>";
									}
								?>
									
							</div>
				
							</div>
					</div>
				    <div class="caixa-rodape">
						<?php if($erros > 0){ ?>
							<a href="<?php echo URL_BASE ."ordemproducao/gerar_solicitacoes/" . $ordem_producao->id_ordem_producao ?>" class="btn btn-vermelho btn-medio d-inline-block">Solicitar Produtos Faltantes</a>						
						<?php } ?>
                        <a href="<?php echo URL_BASE ."ordemproducao/liberar_ordem_producao/" . $ordem_producao->id_ordem_producao ?>" class="btn btn-verde btn-medio d-inline-block">Liberar Ordem de Produção</a>
                   
                    </div>
              </div>
            </div>
			
            <div class="col-12">
                    <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="far fa-list-alt"></i> Itens da Ordem</span>
					<div class="p-3 pt-0">
					<?php 	
						foreach($produtos as $produto){
					?> 
									
						<div class="tabela-responsiva sm tborder">
								<table cellpadding="0" cellspacing="0">
										<thead>
										<tr>
												<td colspan="5"><strong class="h5 mb-0 text-uppercase py-2"><i class="fas fa-arrow-right"></i> Produto: <?php echo $produto->produto->produto ?></strong></td>
										</tr>
												<tr>
													<th align="center">ID</th>
													<th align="left" width="490">Produto</th>
													<th align="center">Estoque</th>
													<th align="center">Qtde</th> 
													<th align="center">Situação</th> 

												</tr>
										</thead>
									<tbody>                                                                                       
										<?php 
											foreach($produto->insumos as $item){                                             
										?> 
										<tr>
											<td align="center"><?php echo $item->id_item_ordem_producao ?></td>	
											<td align="left"><?php echo $item->produto ?></td> 
											<td align="left"><?php echo $item->estoque ?></td> 
											<td align="left"><?php echo $item->qtde_a_produzir * $item->qtde_necessaria ?></td>                    
											<td align="left"><?php echo $item->situacao ?></td> 

										</tr>
										 

											
									<?php }  ?>  	
									</tbody>
								</table>
							  
						</div>
                    <?php } ?>  
                  </div> 

                   
            </div>

    </div>
</div>
</div>