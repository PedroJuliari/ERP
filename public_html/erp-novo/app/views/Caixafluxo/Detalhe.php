	<script type="text/javascript" src="<?php echo URL_BASE ?>/assets/js/js_cotacao.js"></script>	
<section class="conteudo">			
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">						
				
    <div class="rows">	
          
     
								
							
							
    <div class="col-12">
            <div class="caixa">
            <div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5  mb-0 pt-1 d-inline-block"><i class="far fa-list-alt"></i> Entrada por Ordem de Compra </span> 
                    <a href="<?php echo URL_BASE ."entradaordem" ?>" class="btn btn-verde float-right"><i class="fas fa-plus-circle mb-0"></i> Voltar</a>
            </div>	
                    <div class="tabela-responsiva">
                    <table cellpadding="0" cellspacing="0">
                            <thead>
                                    <tr>
                                            <th align="center">Id</th>
                                            <th align="center">Data</th>
                                            <th >Produto</th>
                                            <th align="center">Fornecedor</th>
                                            <th align="center">qtde</th>
                                            <th align="center">Valor</th>
                                            <th align="center">Subtotal</th>
                                    </tr>
                            </thead>
                            <tbody id="lista_cotacao">
                                <?php foreach($itens as $item){ ?>
                            					
                                <tr>
                                         <td align="center"><?php echo $item->id_item_cotacao ?></td>
                                         <td align="center"><?php echo databr($item->limite_entrega,0) ?></td>
                                         <td ><?php echo $item->produto ?></td>
                                         <td align="center"><?php echo $item->nome ?></td>
                                         <td align="center"><?php echo $item->qtde ?></td>
                                         <td align="center"><?php echo moedaBr($item->valor_cotacao) ?></td>
                                         <td align="center"><?php echo moedaBr($item->subtotal) ?></td>										 
                                 </tr>												
                                <?php } ?>
								<tr>
										<td align="right" colspan="7" ><b>Total:</b> <span class="text-verde minimo-font">R$ <?php echo moedaBr($ordemcompra->valor_total) ?></span></td>
								</tr>	
																
        </tbody>
        </table>
         
	 
                        
        <footer class="caixa-rodape"> 
                <ul class="paginacao text-end">
                      <?php //echo paginacao($url, $pg, $paginas) ?>
                 </ul>
        </footer>
</div>

</div>
								
								<!-- qunado não hover pedido 
								
								<div class="caixa p-2">
									<div class="msg msg-verde">
									<p><b><i class="fas fa-check"></i> Mensagem de boas vindas</b> Parabéns seu cotacao foi inserido com sucesso</p>
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

</section>

<script>
	var id_cotacao = "<?php echo $cotacao->id_cotacao ?>"; 
</script>
	


