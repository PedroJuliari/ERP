<script type="text/javascript" src="<?php echo URL_BASE ?>/assets/js/js_saida.js"></script>
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">	
    <div class="rows">	
         <div class="col-12">
            <div class="caixa">
					<div class="caixa-titulo py-1 d-inline-block width-100">
                            <span class="h5 mb-0 d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Produto Faltante no Estoque</span>							
                            <a href="<?php echo URL_BASE ."produto" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                    </div>
            
					<div class="rows p-4"> 
							
							<div class="col-12 px-2">
							   <div class="rows">
									<div class='col-12'><span class='msg msg-vermelho d-block'><i class='fas fa-exclamation-triangle h4 mb-0'></i>  Existem Produtos  com falta de estoque que precisam serem produzidos, clique no botão abaixo para solicitar a produção dos mesmos  </span></div>
								
									
							</div>
				
							</div>
					</div>
				   
              </div>
            </div>
			
            <div class="col-12">
                    <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="far fa-list-alt"></i> Itens do Pedido</span>
                    <div class="tabela-responsiva">
                            <table cellpadding="0" cellspacing="0">
                                    <thead>
                                            <tr>
                                                    <th align="center">ID</th>
                                                    <th align="left" width="290">Produto</th>
                                                    <th align="center">Preço</th>
													<th align="center">Qtde</th>
                                                    <th align="center">Estoque atual</th>
													<th align="center">Situação</th>
                                                    
                                            </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach($itens as $item){ ?>        
                                    <tr>
                                            <td align="center"><?php echo $item->id_item ?></td>	
                                            <td align="left"><?php echo $item->produto ?></td>
                                            <td align="center">R$ <?php echo moedaBr($item->valor) ?></td>
                                            <td align="center"><?php echo $item->qtde ?></td>                                                    
                                            <td align="center"><?php echo $item->estoque_atual ?></td>                                                    
                                            <td align="center"><?php 
                                                  echo ($item->qtde<= $item->estoque_atual) ? "Ok" : "Falta Produzir" ; 
                                            ?></td>	

                                    </tr>
                                    <?php } ?>	
                                    </tbody>
                            </table>
                          
                    </div>
                    </div>
					<div class="caixa-rodape">
						<a href="<?php echo URL_BASE ."pedido/solicitar_producao/" . $pedido->id_pedido ?>" class="btn btn-verde btn-medio d-inline-block">Solicitar Produção</a>						
						
                   
                    </div>
            </div>
</div>
</div>