
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">	
   <form action="<?php echo URL_BASE ."despesa/fazer_pagamento" ?>" method="post">
    <div class="rows">	
        <div class="col-12">
            <div class="col-12">
            <div class="caixa">
		<div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5 mb-0 d-inline-block">
                        <i class="fas fa-search"></i> Conta a Pagar: <?php echo $despesa->id_despesa ?>
                    </span>
                    <a href="<?php echo URL_BASE ."pedido" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                </div>
                    <div class="py-3 px-2">
                        <div class="rows">										
                                <div class="col-3 col-md-12 px-1">
                                        <div class="caixa degrade-roxo px-3 py-4">
                                                <i class="fas fa-users pequeno-font float-left mr-1"></i>
                                                <small>Tipo de Despesa</small>
                                                <h4 style="line-height:1rem"><?php echo $despesa->tipo_despesa ?></h4>
                                        </div>
                                </div>
                                       <div class="col px-1">
                                            <div class="caixa degrade-roxo px-2 py-4">
                                                    <i class="fas fa-calendar-alt pequeno-font float-left mr-1"></i>
                                                    <small>Data Emissão</small>
                                                    <h4><?php echo databr($despesa->data_lancamento,0) ?></h4>
                                            </div>
                                       </div>
                                       <div class="col px-1">	
                                            <div class="caixa degrade-roxo px-2 py-4">
                                                    <i class="far fa-clock pequeno-font float-left mr-1"></i>
                                                    <small>Data Vencimento</small>
                                                    <h4><?php echo databr($despesa->prev_pagamento,0) ?></h4>
                                            </div>
                                       </div>
                                       <div class="col px-1">
                                            <div class="caixa degrade-roxo px-3 py-4">
                                                    <i class="fab fa-bitcoin pequeno-font float-left mr-1"></i>
                                                    <small>Valor</small>
                                                    <h4>R$ <?php echo moedaBr($despesa->valor_previsto) ?></h4>
                                            </div>
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
                <div class="col-3">
                    <label class="text-label">Forma de Pagamento</label>
                    <select class="form-campo" name="id_forma_pagto">

                        <?php foreach($formas as $forma){ 
                            echo "<option value='$forma->id_forma_pagto'  > $forma->forma_pagto</option>";
                        } ?>

                    </select>
                </div>
                
              
                
                
                <div class="col-3">
                    <label class="text-label">Desconto</label>
                    <input type="text" name="desconto" onkeyup="calcDesconto()" id="desconto" class="form-campo">												
                </div>
                <div class="col-3">
                    <label class="text-label">Juros/Multa</label>
                     <input type="text" name="acrescimo" id="acrescimo" class="form-campo">												
                </div>
              
                
                <div class="col-3">
                    <label class="text-label">Valor Pago</label>
                     <input type="text" name="valor_pago" value="<?php echo $despesa->valor_previsto ?>" id="valor_pago" class="form-campo">												
                </div>
                                    
                           
                </div>
            </div>
            <div class="caixa-rodape">
            <input type="hidden"  name="id_despesa" value="<?php echo $despesa->id_despesa ?> " class="btn btn-verde btn-grande d-inline-block">
           <input type="submit"  value="Fazer Pagamento" class="btn btn-verde btn-grande d-inline-block">
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