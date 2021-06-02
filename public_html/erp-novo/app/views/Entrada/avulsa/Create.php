<script type="text/javascript" src="<?php echo URL_BASE ?>/assets/js/js_entrada.js"></script>
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">	
    <div class="rows">	
      
			<div class="col-12">
            <div class="caixa">
			<div class="caixa-titulo py-1 d-inline-block width-100">
                <span class="h5 mb-0 d-inline-block">
                    <i class="fas fa-search"></i> Filtrar Entrada Avulsa
				</span>
					<a href="" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
				</div>
		
                   
					<form name="busca" action="<?php echo URL_BASE ."entradaavulsa/filtro" ?>" method="GET" >
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
                                                       $selecionado = (!isset($produto)) ? "" : ($produto->id_produto==$pesquisa->idProduto) ? "selected" : "";
                                                       echo "<option value='$produto->id_produto' $selecionado>$produto->produto</option>";
                                               }
                                                ?>
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
                    <span class="h5 caixa-titulo"><i class="far fa-list-alt"></i> Itens do Pedido</span>
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
                                                    <th align="center">Data</th>
                                                    <th align="left" width="290">Produto</th>
                                                    <th align="center">Qtde</th>      
                                                    <th align="center">Valor</th>      
                                                    <th align="center">Subtotal</th>      
                                                    
                                            </tr>
                                    </thead>
                                    <tbody id="lista_itens"> 
                                <?php
                                    $i = 1;
                                     if(isset($entradas)){
                                    foreach($entradas as $entrada){
                                        $subtotal = $entrada->qtde_entrada * $entrada->valor_entrada;
                                 ?>
                                    <tr>
                                            <td align="center"><?php echo $i++ ?></td>
                                            <td align="center"><?php echo databr($entrada->data_entrada,0) ?></td>	
                                            <td align="left"><?php echo $entrada->produto ?></td>
                                            <td align="center"><?php echo $entrada->qtde_entrada ?></td>	
                                            <td align="center">R$ <?php echo $entrada->valor_entrada ?></td>	
                                            <td align="center">R$ <?php echo $subtotal ?></td>	

                                    </tr>
                                     <?php } } ?>    	
                                    </tbody>
                            </table>
                          
                    </div>
                    
             </div>

    </div>
</div>
</div>
</div>