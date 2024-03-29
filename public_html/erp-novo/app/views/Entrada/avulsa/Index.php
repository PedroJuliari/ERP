<div class="conteudo-dividido bg-fundo">				
    <div class="conteudo-fluido">	
        <div class="rows">	
            <div class="col-12">
            <div class="caixa">
            <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar por Pedidos</span>
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
                            <span class="h5  mb-0 pt-1 d-inline-block"><i class="far fa-list-alt"></i> LISTA DE PEDIDOS</span>
                    </div>
		<div class="tabela-responsiva">
		<table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                    <th align="center">Id</th>
                    <th align="left">Cliente</th>
                    <th align="center">Data</th>
                    <th align="center">Subtotal</th>
                    <th align="center">Origem</th>
                    <th align="center">Status</th>
                    <th align="center" colspan="4">Ação</th>
            </tr>
        </thead>
        <tbody>  
           <?php foreach($pedidos as $pedido) { 
               if($pedido->id_status==1){
                   $classe_status ="digitacao";
               }else if($pedido->id_status==2){
                   $classe_status ="emespera";
               }else if($pedido->id_status==3){
                   $classe_status ="atendido";
               }else {
                   $classe_status ="recusado";
               }
               
            ?>
        <tr>
                <td align="center"><?php echo $pedido->id_pedido ?></td>
                <td align="left"><?php echo $pedido->nome ?></td>
                <td align="left"><?php echo databr($pedido->data_pedido,0) ?></td>
                <td align="center">R$ <?php echo moedaBr($pedido->total) ?></td> 											
                <td align="left"><?php echo $pedido->origem ?></td>
                <td align="center"><span class="status <?php echo $classe_status ?>"><?php echo $pedido->status ?></span></td> 											
                <td align="center"><a href="<?php echo  URL_BASE ."pedido/detalhe/".$pedido->id_pedido ?>" class="d-block btn btn-outline-verde status digitacao"><i class="fas fa-info-circle"></i> Detalhes</a></td>						
                <td align="center">
                    <?php if($pedido->id_status==1){ ?>                         
                        <a href="#" class="d-block btn btn-outline-verde status digitacao"> Em Digitação</a>
                    <?php }else if($pedido->id_status==2){ ?>   
                       <a href="<?php echo  URL_BASE ."pedido/atender/".$pedido->id_pedido ?>" class="d-block btn btn-outline-verde status emespera"> Atender </a>	
                    <?php }else if($pedido->id_status==3){ ?>
                       <a href="<?php echo URL_BASE ."nfe/create/" . $pedido->id_pedido ?>" class="d-block btn btn-outline-verde status atendido"> NFE</a>	
                    <?php  }else { ?>
                       <a href="<?php echo URL_BASE ."pedido/excluir/" . $pedido->id_pedido ?>" class="d-block btn btn-outline-verde status recusado"> Excluir</a>	
                     <?php } ?>
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