<script type="text/javascript" src="<?php echo URL_BASE ?>assets/js/js_financeiro.js"></script>
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">	
   <form action="<?php echo URL_BASE ."financeiro/pagar" ?>" method="post">
    <div class="rows">	
        <div class="col-12">
            <div class="caixa">
		<div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5 mb-0 d-inline-block">
                        <i class="fas fa-search"></i> Ordem de Compra: <?php echo $ordemcompra->id_ordem_compra ?>
                    </span>
                    <a href="<?php echo URL_BASE ."pedido" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
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
            <span class="h5 caixa-titulo"><i class="far fa-list-alt"></i> Dados do Pagamento</span>

            <div class="caixa">
            <div class="px-5">
            <div class="rows pt-3 pb-4">
                <div class="col-4">
                    <label class="text-label">Pode Parcelaro</label>
                    <select class="form-campo" name="parcelamento" id="parcelamento" onchange="forma_parcelamento()">
                        <option value="0">&#192; Vista</option>
                        <option value="7">Sim, Semanalmente</option>
                        <option value="15">Sim, Quinzenalmente</option>
                        <option value="30">Sim, Mensalmente</option>
                        <option value="60">Sim, Bimestralmente</option>
                        <option value="90">Sim, Trimestralmente</option>
                        <option value="180">Sim, Semestralmente</option>
                        <option value="360">Sim, Anualmente</option>

                    </select>
                </div>
                <div class="col-2">
                    <label class="text-label">Qtde Parc</label>
                    <input type="number" min="1" name="qtde_parcela" id="qtde_parcela" onchange="calcParcela()" value="1" class="form-campo">
                </div>
                
                <div class="col-3">
                    <label class="text-label">Data 1ª Parcela</label>
                     <input type="date" name="data_primeira_parcela" value="<?php echo date("Y-m-d") ?>" id="data_primeira_parcela" class="form-campo">												
                </div>
                <div class="col-3">
                    <label class="text-label">Valor 1ª Parcela</label>
                    <input type="text" name="valor_primeira_parcela" value="<?php echo moedaBr($ordemcompra->valor_total) ?>" onkeyup="calcPrimeiraParcela()" id="valor_primeira_parcela" class="form-campo">												
                </div>
                <div class="col-3">
                    <label class="text-label">Data demais Parcelas</label>
                     <input type="date" name="data_demais_parcela" id="data_demais_parcela" class="form-campo">												
                </div>
                
                <div class="col-3">
                    <label class="text-label">Valor outras Parcelas</label>
                     <input type="text" name="valor_outras_parcelas" id="valor_outras_parcelas" class="form-campo">												
                </div>
                
                
                
                
                           
                <!-- <div class="col-3">
                         <label class="text-label">Categoria</label>
                         <select class="form-campo" name="id_categoria">

                             <?php foreach($categorias as $categoria){ 
                                 echo "<option value='$categoria->id_categoria_conta'  > $categoria->categoria</option>";
                             } ?>

                         </select>
                 </div>
                 <div class="col-3">
                         <label class="text-label">Conta</label>
                         <select class="form-campo" name="id_status_entrega">

                             <?php foreach($contas as $conta){ 
                                 echo "<option value='$conta->id_conta_bancaria'  > $conta->conta_bancaria</option>";
                             } ?>

                         </select>
                 </div>
                -->
                
            <div class="col-3">
                    <label class="text-label">Forma de Pagamento</label>
                    <select class="form-campo" name="forma_pagto">

                        <?php foreach($formas as $forma){ 
                            echo "<option value='$forma->id_forma_pagto'  > $forma->forma_pagto</option>";
                        } ?>

                    </select>
            </div>
                
            <div class="col-3">
                <label class="text-label">Valor</label>
                 <input type="text" name="valor_total" id="valor_total" ReadOnly="true" value="R$ <?php echo moedaBr($ordemcompra->valor_total) ?>" class="form-campo">												
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
                                                    <th align="left" width="380">Produto</th>
                                                    <th align="center">Preço</th>
                                                    <th align="center">Qtde</th>                                                    
                                                    <th align="center">Subtotal</th> 
                                                    
                                            </tr>
                                    </thead>
                                    <tbody>
                                   <?php 
                                    $i=1;
                                   foreach($itens as $saida){  ?> 
                                    <tr>
                                            <td align="center"><?php echo $i++ ?></td>	
                                            <td align="left"><?php echo $saida->produto ?></td>
                                            <td align="center">R$ <?php echo $saida->valor ?></td>
                                            <td align="center"><?php echo $saida->qtde ?></td>  
                                            <td align="center">R$ <?php echo $saida->qtde * $saida->valor  ?></td>
                                                             
                                           
                                    </tr>
                                   <?php } ?>
                                            <tr>
                                                    <td align="right" colspan="9" ><b>Total:</b> <span class="text-verde minimo-font">R$ 100,00</span></td>
                                            </tr>	
                                    </tbody>
                            </table>
                          
                    </div>
                    
                     <div class="caixa">
                   
                        <div class="caixa-rodape">
                        <a href="<?php echo URL_BASE ."saida/recusar/" . $pedido->id_pedido ?>" class="btn btn-amarelo btn-medio d-inline-block">Recusar</a>
                        <a href="<?php echo URL_BASE ."saida/excluir/" . $pedido->id_pedido ?>" class="btn btn-vermelho btn-medio d-inline-block">Excluir</a>
                        <a href="<?php echo URL_BASE ."saida/liberar/" . $pedido->id_pedido ?>" class="btn btn-verde btn-medio d-inline-block">Liberar</a>
                   
                    </div>
                    </div>

                   
            </div>

    </div>
        
        

    </div>
   </form>
</div>
</div>

<script>
    var total = "<?php echo $ordemcompra->valor_total ?>" ;
</script>