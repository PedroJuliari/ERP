<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">	
    <div class="rows">	
        <div class="col-12">
            <div class="caixa">
				<div class="caixa-titulo py-1 d-inline-block width-100">
                <span class="h5 mb-0 d-inline-block">
					<i class="fas fa-search"></i> Dados do Ordem de Compra: <?php echo $ordemcompra->id_ordem_compra ?>
				</span>
				<a href="<?php echo URL_BASE ."entradaordem" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
				</div>
                    <div class="py-3 px-2">
                        <div class="rows">										
                                <div class="col-3 col-md-12 px-1">
                                        <div class="caixa degrade-roxo px-3 py-4">
                                                <i class="fas fa-users pequeno-font float-left mr-1"></i>
                                                <small>Nome do Fornecedor</small>
                                                <h4 style="line-height:1rem"><?php echo $ordemcompra->nome ?></h4>
                                        </div>
                                </div>
                                       <div class="col px-1">
                                            <div class="caixa degrade-roxo px-2 py-4">
                                                    <i class="fas fa-calendar-alt pequeno-font float-left mr-1"></i>
                                                    <small>Data Emissão</small>
                                                    <h4><?php echo databr($ordemcompra->data_emissao,0) ?></h4>
                                            </div>
                                       </div>
                                       <div class="col px-1">	
                                            <div class="caixa degrade-roxo px-2 py-4">
                                                    <i class="far fa-clock pequeno-font float-left mr-1"></i>
                                                    <small>Data Aprovação</small>
                                                    <h4><?php echo databr($ordemcompra->data_aprovacao,0) ?></h4>
                                            </div>
                                       </div>
                                       <div class="col px-1">
                                            <div class="caixa degrade-roxo px-3 py-4">
                                                    <i class="fab fa-bitcoin pequeno-font float-left mr-1"></i>
                                                    <small>Total</small>
                                                    <h4>R$ <?php echo moedaBr($ordemcompra->valor_total) ?></h4>
                                            </div>
                                       </div>
                                       <div class="col px-1">
                                            <div class="caixa degrade-roxo px-3 py-4">
													<i class="fas fa-map-marker-alt  pequeno-font float-left mr-1"></i>
                                                    <small>Status</small>
                                                    <h4><?php echo $ordemcompra->status_ordem_compra ?></h4>
                                            </div>
                                       </div>
						</div>
                    </div>
            </div>
        </div>


            <div class="col-12">
                    <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="far fa-list-alt"></i> Itens do Ordem de Compra</span>
                    <div class="tabela-responsiva">
                            <table cellpadding="0" cellspacing="0">
                                    <thead>
                                            <tr>
                                                    <th align="center">ID</th>
                                                    <th align="center">Id Prod</th>
                                                    <th align="left" width="290">Produto</th>
                                                    <th align="center">Preço</th>
                                                    <th align="center">Qtde</th>                                                    
                                                    <th align="center">Subtotal</th>
                                                    
                                            </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($itens as $item){ ?>        
                                    <tr>
                                            <td align="center"><?php echo $item->id_item_ordem_compra ?></td>
                                            <td align="left"><?php echo $item->id_produto ?></td>
                                            <td align="left"><?php echo $item->produto ?></td>
                                            <td align="center">R$ <?php echo moedaBr($item->valor) ?></td>
                                            <td align="center"><?php echo $item->qtde ?></td>                                                    
                                            <td align="center">R$ <?php echo moedaBr($item->valor * $item->qtde) ?></td>	

                                    </tr>
                                    <?php } ?>   
                                            <tr>
                                                    <td align="right" colspan="6" ><b>Total:</b> <span class="text-verde minimo-font">R$ <?php echo moedaBr($ordemcompra->valor_total) ?></span></td>
                                            </tr>	
                                    </tbody>
                            </table>
                          
                    </div>
                    
                    
                    <div class="caixa">
                   
                        <div class="caixa-rodape">
												
                        <a href="<?php echo URL_BASE ."ordemcompra/imprimir/" . $ordemcompra->id_ordem_compra ?>" class="btn btn-vermelho btn-medio d-inline-block">Imprimir</a>
                        <a href="<?php echo URL_BASE ."entradaordem/entradaPorOrdemDeCompra/" . $ordemcompra->id_ordem_compra ?>" class="btn btn-verde btn-medio d-inline-block">Dar Entrada no Estoque</a>
                   
                    </div>
                    </div>
                    
                 
                    </div>

                   
            </div>

    </div>
</div>
</div>