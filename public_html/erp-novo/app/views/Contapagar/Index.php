<div class="conteudo-dividido bg-fundo">				
    <div class="conteudo-fluido">	
        <div class="rows">	
            <div class="col-12">
            <div class="caixa">
            <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar por Contas</span>
                    <div class="px-5">
                    <div class="rows pt-3 pb-4">
                            <div class="col-3">
                                    <label class="text-label">Data 01</label>
                                            <input type="date" name="" class="form-campo">												
                            </div>
                            <div class="col-3">
                                    <label class="text-label">Data 01</label>
                                            <input type="date" name="" class="form-campo">												
                            </div>
                            <div class="col-4">
                                    <label class="text-label">Nome</label>
                                    <input type="text" placeholder="Digite aqui..." class="form-campo">
                            </div>
							 <div class="col-2 mt-4">
                                 <input type="submit" value="Pesquisar" class="btn btn-warning text-uppercase">
                             </div>
                            </div>
                        </div>
                    </div>
            </div>
							
							
            <div class="col-12">
                <div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                            <span class="h5  mb-0 pt-1 d-inline-block"><i class="far fa-list-alt"></i> LISTA DE CONTAS A PAGAR</span>
                    </div>
		<div class="tabela-responsiva">
		<table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                    <th align="center">Id</th>
                    <th align="left">Emissão</th>
                    <th align="left">Fornecedor</th>
                    <th align="left">Vencimento</th>
                    <th align="left">Valor</th>
                    <th align="center">Quitado</th>
                    <th align="center">Saldo</th>
                    <th align="center" colspan="1">Ação</th>
            </tr>
        </thead>
        <tbody>  
           <?php foreach($contas as $conta) { ?>
        <tr>
                <td align="center"><?php echo $conta->id_conta_pagar ?></td>
                <td align="left"><?php echo databr($conta->data_lancamento,0) ?></td>
                <td align="center"><?php echo $conta->nome ?></td>
                <td align="left"><?php echo databr($conta->data_vencimento,0) ?></td>
                <td align="left">R$ <?php echo moedaBr($conta->valor_atual) ?></td> 
                <td align="left"><?php echo $conta->pago ?></td>
                <td align="left"><?php echo $conta->valor_atual ?></td>
                <td align="center">   
            <a href="<?php echo  URL_BASE ."contapagar/parcelas/".$conta->id_conta_pagar ?>" class="d-block btn btn-outline-verde status emespera"> Dar Baixa </a>	
                    
                </td>
        </tr>
        <?php } ?>
           
			
			
		 </tbody>
</table>
            <footer class="caixa-rodape"> 
				<ul class="paginacao text-end">
					<?php echo paginacao($url, $pg, $paginas)  ?>                                    
				</ul>
			</footer>
            </div>

            </div>
                        </div>

                </div>
        </div>
</div>