<script type="text/javascript" src="<?php echo URL_BASE ?>/assets/js/js_saida.js"></script>
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">	
    <div class="rows">	
        <div class="col-12">
            <div class="caixa">
				<div class="caixa-titulo py-1 d-inline-block width-100">
                <span class="h5 mb-0 d-inline-block">
					<i class="fas fa-search"></i> Dados do Pedido: <?php echo $pedido->id_pedido ?>
				</span>
				<a href="<?php echo URL_BASE ."pedido" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
				</div>
                    <div class="py-3 px-2">
                        <div class="rows">										
                                <div class="col-3 col-md-12 px-1">
                                        <div class="caixa degrade-roxo px-3 py-4">
                                                <i class="fas fa-users pequeno-font float-left mr-1"></i>
                                                <small>Nome do Cliente</small>
                                                <h4 style="line-height:1rem"><?php echo $pedido->nome ?></h4>
                                        </div>
                                </div>
                                       <div class="col px-1">
                                            <div class="caixa degrade-roxo px-2 py-4">
                                                    <i class="fas fa-calendar-alt pequeno-font float-left mr-1"></i>
                                                    <small>Data</small>
                                                    <h4><?php echo databr($pedido->data_pedido,0) ?></h4>
                                            </div>
                                       </div>
                                       <div class="col px-1">	
                                            <div class="caixa degrade-roxo px-2 py-4">
                                                    <i class="far fa-clock pequeno-font float-left mr-1"></i>
                                                    <small>Hora</small>
                                                    <h4><?php echo $pedido->hora_pedido ?></h4>
                                            </div>
                                       </div>
                                       <div class="col px-1">
                                            <div class="caixa degrade-roxo px-3 py-4">
                                                    <i class="fab fa-bitcoin pequeno-font float-left mr-1"></i>
                                                    <small>Total</small>
                                                    <h4>R$ <?php echo moedaBr($pedido->total) ?></h4>
                                            </div>
                                       </div>
                                       <div class="col px-1">
                                            <div class="caixa degrade-roxo px-3 py-4">
						<i class="fas fa-map-marker-alt  pequeno-font float-left mr-1"></i>
                                                    <small>Origem</small>
                                                    <h4><?php echo $pedido->origem ?></h4>
                                            </div>
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
                                                    <th align="center">Origem</th>
                                                    <th align="left" width="290">Produto</th>
                                                    <th align="center">Preço</th>
                                                    <th align="center">Qtde</th>                                                    
                                                    <th align="center">Subtotal</th>
                                                    <th align="center">Estoque</th>                                                    
                                                    <th align="center">Atendido</th>                                     
                                                    
                                            </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        foreach($itens as $item){                                             
                                            $qtde   = ($item->atendido=='S') ? $item->qtde_atendido :  $item->qtde ;
                                        ?>        
                                    <tr>
                                            <td align="center"><?php echo $item->id_item ?></td>
                                            <td align="center"><?php echo $item->origem ?></td>	
                                            <td align="left"><?php echo $item->produto ?></td>
                                            <td align="center">R$ <?php echo moedaBr($item->valor) ?></td>
                                            <td align="center"><?php echo $qtde ?></td>  
                                            <td align="center">R$ <?php echo moedaBr($item->valor * $qtde) ?></td>
                                            <td><?php echo $item->estoque_atual ?></td>                   
                                            <td><?php echo $item->qtde ?></td>                   
                                            
                                            
                                            
                                           

                                    </tr>
                                    <?php } ?>   
                                            <tr>
                                                    <td align="right" colspan="9" ><b>Total:</b> <span class="text-verde minimo-font">R$ <?php echo moedaBr($pedido->total) ?></span></td>
                                            </tr>	
                                    </tbody>
                            </table>
                          
                    </div>
                    
                     <div class="caixa">
                   
                        <div class="caixa-rodape">
                        <a href="<?php echo URL_BASE ."saida/recusar/" . $pedido->id_pedido ?>" class="btn btn-amarelo btn-medio d-inline-block">Recusar</a>
                        <a href="<?php echo URL_BASE ."saida/excluir/" . $pedido->id_pedido ?>" class="btn btn-vermelho btn-medio d-inline-block">Excluir</a>
                        <a href="<?php echo URL_BASE ."pedidofinanceiro/gerar_producao/" . $pedido->id_pedido ?>" class="btn btn-verde btn-medio d-inline-block">Enviar Para Produção</a>
                   
                    </div>
                    </div>

                   
            </div>

    </div>
</div>
</div>