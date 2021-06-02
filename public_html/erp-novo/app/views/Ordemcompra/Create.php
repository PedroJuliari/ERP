<script type="text/javascript" src="<?php echo URL_BASE ?>assets/js/js_ordem.js"></script>
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">	
    <div class="rows">	
      
			<div class="col-12">
            <div class="caixa">
			<div class="caixa-titulo py-1 d-inline-block width-100">
                <span class="h5 mb-0 d-inline-block">
                    <i class="fas fa-search"></i> Ordem de Compra Avulsa
				</span>
					<a href="" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
				</div>
		
                   
                        <form name="busca" action="<?php echo URL_BASE ."ordemcompra/salvar" ?>" method="Post" >
                            <div class="rows p-3">
                                 <div class="col-3">
                                         <label class="text-label">Data</label>
                                         <input type="date" name="data_inicial" value="<?php echo date("Y-m-d") ?>" readonly="true"  class="form-campo">
                                 </div>
				
                                 <div class="col-4">
                                         <label class="text-label">Fornecedor</label>
                                         <select class="form-campo" name="idFornecedor">
                                                <option value="">Escolha uma Opção</option>
                                               <?php foreach($fornecedores as $fornecedor){
                                                       $selecionado = (!isset($fornecedor)) ? "" : ($fornecedor->id_contato==$pesquisa->idFornecedor) ? "selected" : "";
                                                       echo "<option value='$fornecedor->id_contato' $selecionado>$fornecedor->nome</option>";
                                               }
                                                ?>
                                         </select>
                                 </div>
                                    <div class="col-1 mt-4">
                                       <input type="submit" value="Salvar" class="btn btn-warning text-uppercase">
                                   </div>
                                 </div>
			</form>
                            </div>
                    </div>
            <?php if($ordem_compra){ ?>
            <div class="col-12">
                    <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="far fa-list-alt"></i> Itens da Ordem de Compra</span>
                    <form action="<?php echo URL_BASE ."pedido/liberar" ?>" method="post">
                    <div class="caixa">
                    <div class="px-5">
                    <div class="rows pt-3 pb-4">
                            <div class="col-6 position-relative">
                                <label class="text-label">Produto</label>
                                <input type="text" id="produto" data-type="localizar_produto" class="form-campo" />
                           </div>
                            <div class="col-2">
                                <label class="text-label">Valor</label>
                                 <input type="text" id="preco" name="preco"  class="form-campo">												
                            </div>
                        
                        
                            <div class="col-2">
                                <label class="text-label">Qtde</label>
                                 <input type="text" value="1" id="qtde" name ="qtde" class="form-campo">												
                            </div>
                            <div class="col-2">
                                 <input type="hidden" id="id_produto" name="id_produto">
                                  <input type="button" class="btn btn-verde btn-medio d-inline-block inserir"  value="Inserir" id="btnInserir">
                            </div>
                        </div>
                     
                    </div>
                    
                    
                    </div>
                        
                    </form>
                    
                    <div class="tabela-responsiva">
                            <table cellpadding="0" cellspacing="0">
                                    <thead>
                                            <tr>
                                                    <th align="center">Item</th>
                                                    <th align="left" width="290">Produto</th>
                                                    <th align="center">Qtde</th>      
                                                    <th align="center">Valor</th>      
                                                    <th align="center">Subtotal</th>      
                                                    
                                            </tr>
                                    </thead>
                                    <tbody id="lista_itens"> 
                                <?php
                                    $i = 1;
                                    foreach($itens as $item){
                                        $subtotal = $item->qtde * $item->valor;
                                 ?>
                                    <tr>
                                            <td align="center"><?php echo $i++ ?></td>	
                                            <td align="left"><?php echo $item->produto ?></td>
                                            <td align="center"><?php echo $item->qtde ?></td>	
                                            <td align="center">R$ <?php echo $item->valor ?></td>	
                                            <td align="center">R$ <?php echo $subtotal ?></td>	

                                    </tr>
                                <?php } ?>    	
                                    </tbody>
                            </table>
                          
                    </div>
                   <div class="caixa">
                   
                        <div class="caixa-rodape">
												
                        <a href="<?php echo URL_BASE ."ordemcompra/cancelar/" . $ordem_compra->id_ordem_compra ?>" class="btn btn-vermelho btn-medio d-inline-block">Cancelar</a>
                        <a href="<?php echo URL_BASE ."ordemcompra/fechar_ordem/" . $ordem_compra->id_ordem_compra ?>" class="btn btn-verde btn-medio d-inline-block">Finalizar</a>
                   
                    </div>
                    </div> 
             </div>

    </div>
            <?php } ?>
</div>
</div>
</div>
<script>
    var id_ordem = "<?php echo $ordem_compra->id_ordem_compra  ?>";
</script>