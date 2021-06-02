<script type="text/javascript" src="<?php echo URL_BASE ?>assets/js/js_financeiro.js"></script>
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">	
   <form action="<?php echo URL_BASE ."pedido/fazer_faturamento" ?>" method="post">
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
                    <span class="h5 caixa-titulo"><i class="far fa-list-alt"></i> Dados de Entrega</span>
                 
                    
                    <div class="caixa">
                    <div class="px-5">
                    <div class="rows pt-3 pb-4">
                            <div class="col-6">
                                    <label class="text-label">Transportadora</label>
                                    <select class="form-campo" name="id_transportadora">

                                        <?php foreach($transportadoras as $transportadora){ 
                                            echo "<option value='$transportadora->id_contato'  > $transportadora->nome</option>";
                                        } ?>

                                    </select>
                            </div>
                            <div class="col-3">
                                    <label class="text-label">Status entrega</label>
                                    <select class="form-campo" name="status">
                                        <?php foreach($status as $s){ 
                                          echo "<option value='$s->status_entrega'> $s->status_entrega</option>";
                                        } ?>
                                    </select>
                            </div>
                        
                        
                            <div class="col-3">
                                <label class="text-label">Ratreamento</label>
                                 <input type="text" name="rastreamento" class="form-campo">												
                            </div>
                        
                            <div class="col-3">
                                <label class="text-label">Frete</label>
                                 <input type="text" name="frete" class="form-campo">												
                            </div>
                            <div class="col-3">
                                <label class="text-label">Seguro</label>
                                <input type="text" name="seguro" class="form-campo">												
                            </div>
                            <div class="col-3">
                                <label class="text-label">Descontos</label>
                                <input type="text" name="desconto" placeholder="Digite aqui..." class="form-campo">
                            </div>
                            <div class="col-3">
                                <label class="text-label">Despesas</label>
                                <input type="text" name="despesa" placeholder="Digite aqui..." class="form-campo">
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
                    <label class="text-label">Pode Parcelar</label>
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
                    <input type="text" name="valor_primeira_parcela" value="<?php echo moedaBr($pedido->total) ?>" onkeyup="calcPrimeiraParcela()" id="valor_primeira_parcela" class="form-campo">												
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
                 <input type="text" name="valor_total" id="valor_total" ReadOnly="true" value="R$ <?php echo moedaBr($pedido->total) ?>" class="form-campo">												
            </div>
            
                        
                           
                </div>
            </div>
            <div class="caixa-rodape">
            <input type="hidden"  name="id_pedido" value="<?php echo $pedido->id_pedido?> " class="btn btn-verde btn-grande d-inline-block">
           <input type="submit"  value="Finalizar" class="btn btn-verde btn-grande d-inline-block">
       </div>
        </div>


        </div>


</div>

    </div>
   </form>
</div>
</div>

<script>
    var total = "<?php echo $pedido->total ?>" ;
</script>