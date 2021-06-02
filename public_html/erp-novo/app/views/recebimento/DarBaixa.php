
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">	
   <form action="<?php echo URL_BASE ."recebimento/inserir" ?>" method="post">
    <div class="rows">	
        <div class="col-12">
            <div class="caixa">
		<div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5 mb-0 d-inline-block">
                        <i class="fas fa-search"></i> Baixar Recebível: <?php echo $contareceber->id_receber ?>
                    </span>
                    <a href="<?php echo URL_BASE ."contareceber" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
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
                    <label class="text-label">Data Emissão</label>
                    <input type="date" name="data_emissao" value="<?php echo $contareceber->data_emissao ?>" readonly="true" id="data_emissao" class="form-campo">												
                </div>
                
                 <div class="col-3">
                    <label class="text-label">Data Vencimento</label>
                    <input type="date" name="data_vencimento" value="<?php echo $contareceber->data_vencimento ?>" readonly="true" id="data_vencimento" class="form-campo">												
                </div>
                
                <div class="col-3">
                    <label class="text-label">Saldo Devedor </label>
                    <input type="text" name="saldo_devedor" readonly="true" value="<?php echo moedaBr($contareceber->saldo_devedor) ?>" id="saldo_devedor" class="form-campo">												
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
                    <label class="text-label">Valor a Receber</label>
                     <input type="text" name="valor_receber" value="<?php echo moedaBr($contareceber->saldo_devedor) ?>" id="valor_receber" class="form-campo">												
                </div>
                
                <div class="col-3">
                    <label class="text-label">Valor Pago</label>
                     <input type="text" name="valor_pago" id="valor_pago" class="form-campo">												
                </div>
                                    
                           
                </div>
            </div>
            <div class="caixa-rodape">
            <input type="hidden"  name="id_conta_receber" value="<?php echo $contareceber->id_receber?> " class="btn btn-verde btn-grande d-inline-block">
           <input type="submit"  value="Dar Baixa" class="btn btn-verde btn-grande d-inline-block">
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