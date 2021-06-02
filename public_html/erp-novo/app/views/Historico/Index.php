		
<section class="conteudo">			
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">						
				
    <div class="rows">	
            <div class="col-12">
            <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar produto</span>
					<form name="busca" action="<?php echo URL_BASE ."historico/filtro" ?>" method="GET" >
                            <div class="rows p-3">
								 <div class="col-3">
                                         <label class="text-label">Data 1</label>
                                         <input type="date" name="data_inicial" value="<?php echo isset($pesquisa) ? $pesquisa->data_inicial: "" ?>" placeholder="Digite aqui..." class="form-campo">
                                 </div>
								 <div class="col-3">
                                         <label class="text-label">Data 2</label>
                                         <input type="date" name="data_final" value="<?php echo isset($pesquisa) ? $pesquisa->data_final: "" ?>" placeholder="Digite aqui..." class="form-campo">
                                 </div>
								 
								 <div class="col-4">
                                         <label class="text-label">Produto</label>
                                         <select class="form-campo" name="idProduto">
											 <option value="">Escolha uma Opção</option>
											<?php foreach($produtos as $produto){
												$selecionado = (!isset($pesquisa)) ? "" : ($produto->id_produto==$pesquisa->idProduto) ? "selected" : "";
												echo "<option value='$produto->id_produto' $selecionado>$produto->produto</option>";
											}
											 ?>
                                         </select>
                                 </div>
								 
								 <div class="col-4">
                                         <label class="text-label">Tipo Movimento</label>
                                         <select class="form-campo" name="idTipoMov">
											 <option value="">Escolha uma Opção</option>
											<?php foreach($tipomovimentos as $tipomov){
												$selecionado = (!isset($pesquisa)) ? "" : ($tipomov->id_tipo_movimento==$pesquisa->idTipoMov) ? "selected" : "";
												echo "<option value='$tipomov->id_tipo_movimento' $selecionado>$tipomov->tipo_movimento</option>";
											}
											 ?>
                                         </select>
                                 </div>
								 <div class="col-2">
                                         <label class="text-label">Documento</label>
                                         <input type="text" name="documento" value="<?php echo isset($pesquisa) ? $pesquisa->documento: "" ?>" placeholder="Digite aqui..." class="form-campo">
                                 </div>
								 
						 <div class="col-3">
								 <label class="text-label">Entrada/Saída</label>
								 <select class="form-campo" name="ent_saida">
									 <option value="">Escolha uma Opção</option>											
									 <option value="S" <?php echo (!isset($pesquisa)) ? "" : ($pesquisa->ent_saida == "S") ? "selected" : "" ?>>Saída</option>	
									 
									 <option value="E" <?php echo (!isset($pesquisa)) ? "" : ($pesquisa->ent_saida == "E") ? "selected" : "" ?>>Entrada</option>											
								 </select>
						 </div>
                                
								  <div class="col-1 mt-4">
                                       <input type="submit" value="Ok" class="btn btn-warning text-uppercase">
                                   </div>
                                 </div>
                            </div>
						</form>
                    </div>
     
								
							
							
    <div class="col-12">
            <div class="caixa">
            <div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5  mb-0 pt-1 d-inline-block"><i class="far fa-list-alt"></i>Histórico dos Lançamentos</span> <small class="d-inline-block text-right mb-0 h6 px-2"><b class="text-azul"><?php echo isset($total) ? $total : "0" ?></b> registros</small>
                   
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
                                <?php 
                                if(isset($historicos)){
                                foreach($historicos as $historico){ ?>
                            					
                                <tr>
                                         <td align="center"><?php echo $historico->id_historico_movimento ?></td>
                                         <td align="center"><?php echo databr($historico->data_movimento,0) ?></td>
                                         <td align="left"><?php echo $historico->produto ?></td>
                                         <td align="center"><?php echo moedaBr($historico->preco) ?></td>
                                         <td align="center"><?php echo $historico->qtde_movimento ?></td>
                                         <td align="center"><?php echo moedaBr($historico->preco *$historico->qtde_movimento) ?></td>
                                         <td align="center"><?php echo $historico->entrada_saida ?></td>
                                         <td align="center"><?php echo $historico->descricao_movimento ?></td>
                                       
                                 </tr>												
                                <?php } } ?>
																
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

</section>
	


