		
<section class="conteudo">			
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">						
				
    <div class="rows">	
            <div class="col-12">
            <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar Livro Diário</span>
					<form name="busca" action="<?php echo URL_BASE ."livrodiario/filtro" ?>" method="GET" >
                            <div class="rows p-3">
                                 <div class="col-3">
                                         <label class="text-label">Data 1</label>
                                         <input type="date" name="data_inicial" value="<?php echo isset($pesquisa) ? $pesquisa->data_inicial: "" ?>" placeholder="Digite aqui..." class="form-campo">
                                 </div>
								 <div class="col-3">
                                         <label class="text-label">Data 2</label>
                                         <input type="date" name="data_final" value="<?php echo isset($pesquisa) ? $pesquisa->data_final: "" ?>" placeholder="Digite aqui..." class="form-campo">
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
                    <span class="h5  mb-0 pt-1 d-inline-block"><i class="far fa-list-alt"></i> Livro Diário </span> <small class="d-inline-block text-right mb-0 h6 px-2"><b class="text-azul"><?php echo $total ?></b> registros</small>
                    
            </div>	
                    <div class="tabela-responsiva">
                    <table cellpadding="0" cellspacing="0">
                            <thead>
                                    <tr>
                                            <th align="center">Id</th>
                                            <th align="center">Data</th>
                                            <th align="center">Conta Débito</th>
                                            <th align="center">Conta Crédito</th>
                                            <th align="center">Valor</th>
                                            <th align="center">Histórico</th>
                                    </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $i=1;
                                    foreach($livros as $livro){ ?>
                            					
                                <tr>
                                         <td align="center"><?php echo $i++ ?></td>
                                         <td align="center"><?php echo databr($livro->data_lancamento,0) ?></td>
                                         <td align="center">
                                             <a href="<?php echo URL_BASE ."contabilidade/razonete/". $livro->conta_debitada ?>"><?php echo $livro->conta_debitada ?></a> 
                                         </td>
                                         <td align="center">
                                              <a href="<?php echo URL_BASE ."contabilidade/razonete/". $livro->conta_creditada ?>"><?php echo $livro->conta_creditada ?></a> 
                                         </td>                                         
                                         <td align="center"><?php echo moedaBr($livro->valor) ?></td>
                                         <td align="center"><?php echo $livro->historico ?></td>
                                         
                                           											
                                <?php } ?>
																
        </tbody>
        </table>
                        
                        
        <footer class="caixa-rodape"> 
                <ul class="paginacao text-end">
                      <?php echo paginacao($url, $pg, $paginas) ?>
                 </ul>
        </footer>
</div>

</div>
							</div>
							
						</div>
				</div>
			</div>

</section>
	


