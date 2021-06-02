<div class="conteudo-dividido bg-fundo">				
    <div class="conteudo-fluido">	
        <div class="rows">	
         							
							
            <div class="col-12">
                <div class="caixa">
				<div class="caixa-titulo py-1 d-inline-block width-100">
                                    <span class="h5 mb-0 d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Lista de Pagamento</span>							
                                    <a href="<?php echo URL_BASE ."contareceber" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>

                    </div>
				
		<div class="tabela-responsiva">
		<table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                    <th align="center">Id</th>
                    <th align="left">Data</th>
                    <th align="left">Valor</th>
                    <th align="left">Juros/Multa</th>
                    <th align="left">Desconto</th>
                    <th align="left">Forma Pagto</th>
            </tr>
        </thead>
        <tbody>  
           <?php foreach($recebimentos as $recebimento) { ?>
        <tr>
                <td align="center"><?php echo $recebimento->id_recebimento_parcela ?></td>
						<td align="left"><?php echo databr($recebimento->data_recebimento,0) ?></td>
						<td align="left">R$ <?php echo moedaBr($recebimento->valor_recebido) ?></td> 											
						<td align="left">R$ <?php echo moedaBr($recebimento->acrescimo_recebimento) ?></td> 											
						<td align="left">R$ <?php echo moedaBr($recebimento->desconto_recebimento) ?></td> 											
						<td align="left"><?php echo $recebimento->forma_pagto ?></td>
               
        </tr>
        <?php } ?>
           
			
			
		 </tbody>
</table>
            
            </div>

            </div>
                        </div>

                </div>
        </div>
</div>