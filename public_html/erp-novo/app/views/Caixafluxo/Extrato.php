		
<section class="conteudo">			
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">						
				
    <div class="rows">	
            <div class="col-12">
            <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar produto</span>
					<form name="busca" action="<?php echo URL_BASE ."historico/extrato" ?>" method="GET" >
                            <div class="rows p-3">
								 
								 
								 <div class="col-6">
                                         <label class="text-label">Selecione um Produto</label>
                                         <select class="form-campo" name="idProduto">
											 <option value="">Escolha uma Opção</option>
											<?php foreach($produtos as $produto){
												$selecionado = (!isset($pesquisa)) ? "" : ($produto->id_produto==$pesquisa->idProduto) ? "selected" : "";
												echo "<option value='$produto->id_produto' $selecionado>$produto->produto</option>";
											}
											 ?>
                                         </select>
                                 </div>
								 
							
                                
								  <div class="col-1 mt-4">
                                       <input type="submit" value="Ver Extrato" class="btn btn-warning text-uppercase">
                                   </div>
                                 </div>
                            </div>
						</form>
                    </div>
     
								
							
	<?php if($historicos){ ?>						
    <div class="col-12">
            <div class="caixa">
            <div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5  mb-0 pt-1 d-inline-block"><i class="far fa-list-alt"></i>Histórico dos Lançamentos</span> <small class="d-inline-block text-right mb-0 h6 px-2"><b class="text-azul"><?php echo count($historicos) ?></b> registros</small>
                   
            </div>	
                    <div class="tabela-responsiva">
				
                    <table cellpadding="0" cellspacing="0">
                            <thead>
                                    <tr>
                                            <th align="center">Id</th>
                                            <th align="center">Data</th>
                                            <th align="left">Produto</th>
                                            <th align="center">Valor</th>
                                            <th align="center">qtde</th>
                                            <th align="center">Subtotal</th>
                                            <th align="center">Tipo</th>
                                            <th align="center">Descrição</th>
                                    </tr>
                            </thead>
                            <tbody>
                                <?php foreach($historicos as $historico){ ?>
                            					
                                <tr>
                                         <td align="center"><?php echo $historico->id_historico_lancamento ?></td>
                                         <td align="center"><?php echo databr($historico->data_movimento,0) ?></td>
                                         <td align="left"><?php echo $historico->produto ?></td>
                                         <td align="center"><?php echo moedaBr($historico->preco) ?></td>
                                         <td align="center"><?php echo $historico->qtde_historico ?></td>
                                         <td align="center"><?php echo moedaBr($historico->preco *$historico->qtde_historico) ?></td>
                                         <td align="center"><?php echo $historico->entrada_saida ?></td>
                                         <td align="center"><?php echo $historico->descricao_historico ?></td>
                                       
                                 </tr>												
                                <?php } ?>
																
							</tbody>
					</table>
					 
                        
                        
					<footer class="caixa-rodape"> 
							<ul class="paginacao text-end">
								  <?php // echo paginacao($url, $pg, $paginas) ?>
							 </ul>
					</footer>
					</div>

					</div>
	
		</div>
		<?php } ?>					
						</div>
				</div>
			</div>

</section>
	


