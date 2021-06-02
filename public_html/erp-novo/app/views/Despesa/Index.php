		
<section class="conteudo">			
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">						
				
    <div class="rows">	
            <div class="col-12">
            <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar Despesas</span>
			<form name="busca" action="<?php echo URL_BASE ."despesa/filtro" ?>" method="GET" >
                            <div class="rows p-3">
                                 <div class="col-3">
                                         <label class="text-label">Data 1</label>
                                         <input type="date" name="data_inicial" placeholder="Digite aqui..." class="form-campo">
                                 </div>
								 <div class="col-3">
                                         <label class="text-label">Data 2</label>
                                         <input type="date" name="data_final"  placeholder="Digite aqui..." class="form-campo">
                                 </div>
                             
                                  <div class="col-4">
                                         <label class="text-label">Status</label>
                                         <select class="form-campo" name="idStatus">
                                            <option value="">Escolha uma Opção</option>
                                            <?php foreach($status as $s){
                                                    $selecionado = (!isset($pesquisa)) ? "" : ($pesquisa->idStatus==$s->id_status_ordem_compra) ? "selected" : "";
                                                    echo "<option value='$s->id_status_ordem_compra' $selecionado>$s->status_ordem_compra</option>";
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
            <div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5  mb-0 pt-1 d-inline-block"><i class="far fa-list-alt"></i> Despesa </span> <small class="d-inline-block text-right mb-0 h6 px-2"><b class="text-azul">0</b> registros</small>
                   <a href="<?php echo URL_BASE ."despesa/create" ?>" class="btn btn-verde float-right"><i class="fas fa-plus-circle mb-0"></i> Adicionar novo</a>
            </div>	
                    <div class="tabela-responsiva">
                    <table cellpadding="0" cellspacing="0">
                            <thead>
                                    <tr>
                                            <th align="center">Ord</th>
                                            <th align="center">Tipo Despesa</th>
                                            <th align="center">Descrição</th>
                                            <th align="center">Data Lançamento</th>
                                            <th align="center">Data Previsão</th>
                                            <th align="center">Data Pagamento</th>
                                            <th align="center">Valor</th>
                                            <th align="center" colspan="1">Ação</th>
                                    </tr>
                            </thead>
                            <tbody>
                               
                            <?php 
                                $i=1;
                                foreach($despesas as $despesa){ ?>					
                                <tr>
                                         <td align="center"><?php echo $i++ ?></td>
                                         <td align="center"><?php echo $despesa->tipo_despesa ?></td>
                                         <td align="center"><?php echo $despesa->descricao_despesa ?></td>
                                         <td align="center"><?php echo databr($despesa->data_lancamento,0) ?></td>
                                         <td align="center"><?php echo databr($despesa->prev_pagamento,0) ?></td>
                                         <td align="center"><?php echo databr($despesa->data_pagamento,0) ?></td>
                                         <td align="center">R$ <?php echo $despesa->valor_previsto ?></td>
                                         <td align="center">
                                           <?php if ($despesa->pago=="N") { ?>  
                                            <a href="<?php echo URL_BASE ."despesa/pagar/" . $despesa->id_despesa ?>" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Pagar</a>
                                           <?php }else{ ?>  
                                            <span class="d-inline-block btn btn-outline-verde btn-pequeno"> Pago</span>
                                           <?php } ?>  
                                        </td>
                                 </tr>												
                            <?php } ?>   
																
        </tbody>
        </table>
                        
                        
        <footer class="caixa-rodape"> 
                <ul class="paginacao text-end">
                   
                 </ul>
        </footer>
</div>

</div>
							
							</div>
							
						</div>
				</div>
			</div>

</section>
	


