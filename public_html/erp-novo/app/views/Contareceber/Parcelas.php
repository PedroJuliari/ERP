
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">	
    <div class="rows">	
        <div class="col-12">
            <div class="caixa">
		<div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5 mb-0 d-inline-block">
                        <i class="fas fa-search"></i> Conta a Receber: <?php echo $contareceber->id_conta_receber ?>
                    </span>
                    <a href="<?php echo URL_BASE ."pedido" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                </div>
                    <div class="py-3 px-2">
                        <div class="rows">										
                                <div class="col-3 col-md-12 px-1">
                                        <div class="caixa degrade-roxo px-3 py-4">
                                                <i class="fas fa-users pequeno-font float-left mr-1"></i>
                                                <small>Nome do Fornecedor</small>
                                                <h4 style="line-height:1rem"><?php echo $contareceber->nome ?></h4>
                                        </div>
                                </div>
                                       <div class="col px-1">
                                            <div class="caixa degrade-roxo px-2 py-4">
                                                    <i class="fas fa-calendar-alt pequeno-font float-left mr-1"></i>
                                                    <small>Data Emissão</small>
                                                    <h4><?php echo databr($contareceber->data_emissao,0) ?></h4>
                                            </div>
                                       </div>
                                       <div class="col px-1">	
                                            <div class="caixa degrade-roxo px-2 py-4">
                                                    <i class="far fa-clock pequeno-font float-left mr-1"></i>
                                                    <small>Data Vencimento</small>
                                                    <h4><?php echo databr($contareceber->data_vencimento,0) ?></h4>
                                            </div>
                                       </div>
                                       <div class="col px-1">
                                            <div class="caixa degrade-roxo px-3 py-4">
                                                    <i class="fab fa-bitcoin pequeno-font float-left mr-1"></i>
                                                    <small>Total</small>
                                                    <h4>R$ <?php echo moedaBr($contareceber->saldo_devedor) ?></h4>
                                            </div>
                                       </div>
                                       <div class="col px-1">
                                            <div class="caixa degrade-roxo px-3 py-4">
						<i class="fas fa-map-marker-alt  pequeno-font float-left mr-1"></i>
                                                    <small>Pago</small>
                                                    <h4><?php echo $contareceber->pago ?></h4>
                                            </div>
                                       </div>
						</div>
                    </div>
            </div>
        </div> 

  
        
        <div class="col-12">
            <div class="caixa">
            <span class="h5 caixa-titulo"><i class="far fa-list-alt"></i> Lista de Parcelas</span>
                
            <div class="tabela-responsiva">
                            <table cellpadding="0" cellspacing="0">
                                    <thead>
                                            <tr>
                                                    <th align="center">Parcela</th>
                                                    <th align="left" >Emissão</th>
                                                    <th align="center">Vencimento</th>
                                                    <th align="center">Pagamento</th>
                                                    <th align="center">Valor</th> 
                                                    <th align="center">Parcela</th> 
                                                    
                                            </tr>
                                    </thead>
                                    <tbody>
                                   <?php 
                                    $i=1;
                                   foreach($parcelas as $parcela){  ?> 
                                    <tr>
                                            <td align="center"><?php echo $parcela->num_parcela ?></td> 
                                            <td align="left"><?php echo databr($parcela->data_emissao,0) ?></td>
                                            <td align="center"><?php echo databr($parcela->data_vencimento,0) ?></td>  
                                            <td align="center"><?php echo databr($parcela->data_pagamento,0) ?></td>  
                                            <td align="center"><?php echo $parcela->saldo_devedor ?></td>
                                            <td align="center">                     
                                            <?php if($parcela->pago=="N") { ?>
                                                <a href="<?php echo  URL_BASE ."contareceber/baixar/".$parcela->id_parcela_receber ?>" class="d-block btn btn-outline-verde status emespera"> Dar Baixa </a>	
                                            <?php } else { ?>
                                               <a href="<?php echo  URL_BASE ."contareceber/verparcela/".$parcela->id_parcela_receber ?>" class="d-block btn btn-outline-verde status emdigitacao"> Ver Pagto </a>
                                            <?php } ?>
                                        </td> 
                                            
                                    </tr>
                                   <?php } ?>
                                            <tr>
                                                    <td align="right" colspan="9" ><b>Total:</b> <span class="text-verde minimo-font">R$ 100,00</span></td>
                                            </tr>	
                                    </tbody>
                            </table>
                          
                    </div>



        </div>


</div>
        
        
          
        

    </div>

</div>
</div>

<script>
    var total = "<?php echo $ordemcompra->valor_total ?>" ;
</script>