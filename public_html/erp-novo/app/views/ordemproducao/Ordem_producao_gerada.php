<script type="text/javascript" src="<?php echo URL_BASE ?>/assets/js/js_saida.js"></script>
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">	
    <div class="rows">	
         <div class="col-12">
            <div class="caixa">
					<div class="caixa-titulo py-1 d-inline-block width-100">
                            <span class="h5 mb-0 d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Ordem de Produção Gerada</span>							
                            <a href="<?php echo URL_BASE ."ordemproducao" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                    </div>
            
					<div class="rows p-4"> 
							
							<div class="col-12 px-2">
							   <div class="rows">
									<div class='col-12'><span class='msg msg-verde d-block'><i class='fas fa-check'></i> Foi gerada uma nova ordem de produção para os produtos abaixo:</span></div>
									
							</div>
				
							</div>
					</div>
				  
              </div>
            </div>
			<div class="col-12">
                    <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="far fa-list-alt"></i> Itens da Ordem</span>
                    <div class="tabela-responsiva">
                            <table cellpadding="0" cellspacing="0">
                                    <thead>
                                            <tr>
                                                    <th align="center">ID</th>
                                                    <th align="left" width="290">Produto</th>
													<th align="center">Qtde</th>
                                                    
                                            </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach($itens as $item){ ?>        
                                    <tr>
                                            <td align="center"><?php echo $item->id_item_ordem_producao ?></td>	
                                            <td align="left"><?php echo $item->produto ?></td>
                                            <td align="center"><?php echo $item->qtde_a_produzir ?></td>                                                    
                                          	

                                    </tr>
                                    <?php } ?>	
                                    </tbody>
                            </table>
                          
                    </div>
                    </div>
					
            </div>			
          
</div>
</div>