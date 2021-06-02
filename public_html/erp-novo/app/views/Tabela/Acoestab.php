		
<section class="conteudo">			
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">						
				
    <div class="rows">	
            <div class="col-12">
            <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Definir Ações da tabela de: <?php echo $tabela->nome_tabela ?></span>
			<form name="busca" action="<?php echo URL_BASE ."tabela/inserirAcao" ?>" method="POST" >
                            <div class="rows p-3">
                                 
                             <!-- <div class="col-4">
                                         <label class="text-label">Tabela</label>
                                         <select class="form-campo" name="id_tabela">
                                           
                                            <?php/* foreach($tabelas as $tab){
												$selecionado = ($tab->id_tabela==$tab->id_tabela)?"selected":"";
                      
                                                    echo "<option value=$tab->id_tabela $selecionado>$tab->nome_tabela</option>";
                                            }
                                            */?>
											</select>
                                         
                                 </div>-->
                                  <div class="col-4">
                                         <label class="text-label">Ações</label>
                                         <select class="form-campo" name="id_acao">
     
                                            <?php foreach($acoes as $acao){
                                               // $selecionado = ($acao->id_acao==$acao->id_acao)?"selected":"";
                                                    echo "<option value='$acao->id_acao'>$acao->acao</option> ";
                                            }
                                            ?>
                                        </select>
                                 </div>
								  <div class="col-1 mt-4">
                                       
									   <input type="hidden" name="id_tabela"value="<?php echo $tabela->id_tabela?>" >
									   <input type="submit" value="Inserir" class="btn btn-warning text-uppercase">
                                   </div>
                                 </div>
								 </form>
                            </div>
						
                    </div>
     
								
							
							
    <div class="col-12">
            <div class="caixa">
            <div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5  mb-0 pt-1 d-inline-block"><i class="far fa-list-alt"></i> Ordens de Ações a usuarios </span> <small class="d-inline-block text-right mb-0 h6 px-2"><b class="text-azul"><?php echo isset($total) ? $total : "0" ?></b> registros</small>
                   
            </div>	
                    <div class="tabela-responsiva">
                    <table cellpadding="0" cellspacing="0">
                            <thead>
                                    <tr>
                                            <th align="center">Id</th>
											<th align="center">Tabela</th>
                                            <th align="center">Ação</th>
                                           
                                    </tr>
                            </thead>
                            <tbody>
                               
                            <?php 
                            if(isset($lista)){
                            foreach($lista as $acao){ ?>					
                                <tr>
                                         <td align="center"><?php echo $acao->id_acao ?></td>
                                         <td align="center"><?php echo $acao->nome_tabela ?></td>
                                         <td align="center"><?php echo $acao->acao ?></td>
                                      
                                         <td align="center">
					
                                            <a href="<?php echo URL_BASE ."tabelaacao/excluir/" . $acao->id_tabela ."/".$acao->id_acao?>" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> EXCLUIR</a>
                                       			
                                         </td>
                                 </tr>												
							<?php }}?>
																
        </tbody>
        </table>
                        
                        
        <footer class="caixa-rodape"> 
                <ul class="paginacao text-end">
                  <?php //echo  paginacao($url, $pg, $paginas) ?> 
                 </ul>
        </footer>
</div>

</div>
							
							</div>
							
						</div>
				</div>
			</div>

</section>
	


