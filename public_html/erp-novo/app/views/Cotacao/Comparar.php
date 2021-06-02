<script type="text/javascript" src="<?php echo URL_BASE ?>/assets/js/js_cotacao.js"></script>
		<section class="conteudo">
				<div class="conteudo-fluido">				
				
			<div class="bg-fundo p-3">					
				<div class="rows">
					<div class="col-12">
						<div class="caixa mb-3">
							<div class="h5 caixa-titulo azul d-inline-block width-100 py-1">
								<span class="d-inline-block pt-1"><i class="fas fa-arrow-right"></i> COTAÇÕES POR FORNECEDORES </span>
								<a href="" class="btn btn-verde float-right px-5 btn-grande">Aprovar Todos</a> 
							</div>
							
							
                    <?php foreach($itens as $item){ 
                            $class_ativo = ($item->solicitacao->id_fornecedor) ? "compra_ativo" : "";
                        ?>
						<div class="rows <?php echo $class_ativo ?> " id="<?php echo "class_ativo_" . $item->solicitacao->id_solicitacao ?>"  >	
						<div class="col-9 mb-3">	
							<div class="tabela-responsiva sm mt-3 tborder">
								<table cellpadding="0" cellspacing="0" class=" mb-0">
									<thead>
										<tr>											
                                                                                    <th align="center"  width="20">Id</th>
                                                                                    <th align="left">Produto</th>
										</tr>
									</thead>
									<tbody>
										<tr class="status-bg"> 
											
											<td align="center"><?php echo $item->solicitacao->id_solicitacao  ?></td>
											<td align="left">
												<strong class="d-block"><?php echo $item->solicitacao->produto  ?></strong>
												<small class="datas">Data: <?php echo databr($item->solicitacao->data_solicitacao,0)  ?></small>
												<small class="datas">Data entrega: <?php echo databr($item->solicitacao->data_entrega,0)  ?></small>
												<small class="datas">Status: <?php echo $item->solicitacao->status_solicitacao  ?></small>
											</td>	
										</tr>
										<tr>
											<td colspan="3">
												<table cellpadding="0" cellspacing="0" class="px-4 py-3">
												<thead>
													<tr>
														
														<th align="center"  width="20">Id</th>
														<th align="left">Fornecedor</th>
														<th align="center">Qtde</th>
														<th align="center">Valor</th>
														<th align="center">Status</th>
														<th align="center">Ação</th>
													</tr>
												</thead>
												<tbody >
												<?php foreach($item->fornecedores as $fornecedor) { ?>
													<tr class="status-bg"> 
														<td align="center"><?php echo $fornecedor->id_item_cotacao ?></td>
														<td align="left"><?php echo $fornecedor->nome ?></td>	
														<td align="center"><?php echo $fornecedor->qtde ?></td>
														<td align="center"><?php echo $fornecedor->valor_cotacao ?></td>
														<td align="center"><?php echo $fornecedor->status_item_cotacao ?></td>
														<td align="center">
                                                                                                                    <?php if($fornecedor->id_status_item_cotacao==2){ ?>
                                                                                                                        <a href="javascript:;" onclick="aprovar_item_cotacao(this,<?php echo $item->solicitacao->id_solicitacao ?>)" class="link-vermelho">Aprovar</a>
                                                                                                                    <?php } else{ 
                                                                                                                        echo "<span>Sem ação </span>" ;
                                                                                                                    } ?>
														 </td>
													</tr>
                                                                                                <?php } ?>
												
												</tbody>
												</table>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						
						<div class="col-3 mt-3 d-flex mb-3">
							<div class="caixa-clara width-100">	
								<span class="titulo">FORNECEDOR RECOMENDADO</span>													
								<div class="px-3 py-2">
									<div class="border-bottom pb-3 mb-3">
										<small class="d-block">Fornecedores Recomendados:</small>
										<span class="d-block h5 text-uppercase" id="<?php echo "forn_". $item->solicitacao->id_solicitacao ?>" ><?php echo $item->menor_preco->nome ?></span>
										<small class="d-block">Menor valor:</small>
										<strong class="d-block h3 text-uppercase mb-0" id="<?php echo "preco_". $item->solicitacao->id_solicitacao ?>">R$ <?php echo $item->menor_preco->valor_cotacao ?></strong>
									</div>
								
                                                                            <?php if(!$item->solicitacao->id_fornecedor){ ?>
										<div id="<?php echo "btnAprova_". $item->solicitacao->id_solicitacao ?>" >
											<a href="javascript:;" class="btn btn-verde h5">Aprovar</a>
										</div>
                                                                            <?php } ?>
								
								</div>
							
							</div>
						</div>
						
						
					</div>
					
				<?php } ?>	
										
				</div>
							
				</div>
			</div>
			</div>
		</section>
<script>
    var id_cotacao =<?php echo $cotacao->id_cotacao ?>
</script>