
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">				

    <div class="rows">	
        <div class="col-12">
			<div class="caixa">
                <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar Nota</span>
                <div class="rows p-3">
                    <div class="col-3">
                            <label class="text-label">Nome</label>
                            <input type="text" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class="col-3">
                            <label class="text-label">Opção</label>
                            <select class="form-campo">
                                    <option>Opção 01</option>
                                    <option>Opção 02</option>
                                    <option>Opção 03</option>
                            </select>
                    </div>
                    <div class="col-4">
                            <label class="text-label">Nome</label>
                            <input type="text" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class="col-2 mt-4">
                        <input type="submit" value="Ok" class="btn btn-warning text-uppercase width-100">
                    </div>
                </div>
            </div>
        <div class="col-12">
			<div class="msg msg-vermelho" id="msg_erro" style="display:none" >
				<span class="h4"><b><i class="fas fa-times"></i> Mensagem de Erro</b></span>
				<p id="txt_erro"></p>
				
			</div>
        </div>
        </div>
		
	<div class="col-12" id="dados" style="display:none" >
        <div class="caixa">
                <span class="h5 caixa-titulo"> Dados da Nota</span>
                <div class="rows p-3">
                    <div class="col-4">
                            <label class="text-label">Chave</label>
                            <input type="text"  class="form-campo" id="txt_chave">
                    </div>
                    <div class="col-4">
                            <label class="text-label">Recibo</label>
                            <input type="text"  class="form-campo" id="txt_recibo">
                    </div>
                    <div class="col-4">
                            <label class="text-label">Protocolo</label>
                            <div class="input-grupo">	
                           <input type="text"  class="form-campo" id="txt_protocolo">
                    </div>
                    </div>
                </div>
            </div>
			<div class="msg msg-vermelho" id="msg_erro" style="display:none" >
				<span class="h4"><b><i class="fas fa-times"></i> Mensagem de Erro</b></span>
				<p id="txt_erro"></p>
				
			</div>
        </div>
		
	 <div class="col-12">
            <div class="caixa">
            <div class="caixa-titulo py-1 d-inline-block width-100">
                <span class="h5  mb-0 pt-1 d-inline-block"><i class="far fa-list-alt"></i> Lista de NFE</span>
            </div>	
            <div class="tabela-responsiva">
                <table cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th align="center">Id</th>
                            <th align="center" >Núm. Nota</th>
                            <th align="center" >Cliente</th>
                            <th align="center">Status</th>
                            <th align="center" colspan="9" >Ação</th>
                        </tr>
                    </thead>
                    <tbody>

                  <?php 
				  $i=1;
					foreach($notas as $nfe) { 
						if($nfe->nfe_status == '0'):
                                $status = 'Em digitação';
                            elseif($nfe->nfe_status == '1'):
                                $status = 'gerado XML';
                            elseif($nfe->nfe_status == '2'):
                                $status = 'Assinada';
                            elseif($nfe->nfe_status == '3'):
                                $status = 'Validada';
                            elseif($nfe->nfe_status == '4'):
                                $status = 'Autorizada';
                            elseif($nfe->nfe_status == '5'):
                                $status = 'Cancelada';
                            endif;
							
							if ($nfe->nfe_status == 0){ $status0 = "clicavel"; } else if($nfe->nfe_status > 0){ $status0 = "clicado"; } else {$status0 = "nulo"; }
							if ($nfe->nfe_status == 1){ $status1 = "clicavel"; } else if($nfe->nfe_status > 1){ $status1 = "clicado"; } else {$status1 = "nulo"; }
							if ($nfe->nfe_status == 2){ $status2 = "clicavel"; } else if($nfe->nfe_status > 2){ $status2 = "clicado"; } else {$status2 = "nulo"; }
							if ($nfe->nfe_status == 3){ $status3 = "clicavel"; } else if($nfe->nfe_status > 3){ $status3 = "clicado"; } else {$status3 = "nulo"; }
				  
				  ?>	
				  		
						<tr>
                            <td align="center"><?php echo $i++; ?></td>
                            <td align="center"><?php echo str_pad($nfe->cnf,8, '0', STR_PAD_LEFT)  ?></td>
                            <td align="center"><?php echo $nfe->xnome_cl ?></td>
                            <td align="left"><span class="status" id="<?php echo "statusNfe". $nfe->id_nfe ?>"> <?php echo $status ?></span></td>
	
                        <?php if(($nfe->nfe_status==0) || ($nfe->nfe_status==1) || ($nfe->nfe_status==2) || ($nfe->nfe_status==3) ) { ?>
                            <td align="center"><a href="javascript:;" onclick="gerar_xml(<?php echo $nfe->id_nfe ?>)" 
							class="btn btn-pequeno <?php echo $status0 ?>" id="<?php echo "corLink0_" .$nfe->id_nfe ?>"><i class="<?php echo ($nfe->nfe_status >0) ? "fas fa-check-square" : "fas " ?> "></i>  Gerar XML</a></td>
							
                            <td align="center"><a href="javascript:;" onclick="assinar_xml(<?php echo $nfe->id_nfe ?>)" class="btn  btn-pequeno <?php echo $status1 ?>" id="<?php echo "corLink1_" .$nfe->id_nfe ?>"><i class="<?php echo ($nfe->nfe_status >1) ? "fas fa-check-square" : "fas " ?>"></i> Assinar XML</a></td>
							
                            <td align="center"><a href="javascript:;" onclick="enviar_xml(<?php echo $nfe->id_nfe ?>)" class="btn btn-pequeno <?php echo $status2 ?>" id="<?php echo "corLink2_" .$nfe->id_nfe ?>"><i class="<?php echo ($nfe->nfe_status >2) ? "fas fa-check-square" : "fas fa-ban " ?>"></i> Enviar XML</a></td>
							
                            <td align="center"><a href="javascript:;" onclick="autorizar_xml(<?php echo $nfe->id_nfe ?>)" class="btn btn-pequeno <?php echo $status3 ?>" id="<?php echo "corLink3_" .$nfe->id_nfe ?>"><i class="<?php echo ($nfe->nfe_status >2) ? "fas fa-check-square" : "fas fa-ban " ?>"></i> Autorizar</a></td>
							<td align="center"><a href="<?php echo URL_BASE ."nfe/edit/".$nfe->id_nfe ?>" class="btn btn-azul btn-pequeno"><i class="fas fa-edit"></i> Editar</a></td>
                        <?php }else{ ?>   
                                
                            <td align="center"><a href="<?php echo URL_BASE ."nfe/danfeNFE/".$nfe->id_nfe ?>" target="_blank" class="btn btn-azul btn-pequeno"><i class="fas fa-print"></i> Danfe</a></td>
                            <td align="center"><a href="<?php echo URL_BASE ."nfe/cancelamento/".$nfe->id_nfe ?>" class="btn btn-azul btn-pequeno"><i class="fas fa-pen"></i> Correção</a></td>
                            <td align="center"><a href="<?php echo URL_BASE ."nfe/inutilizar/".$nfe->id_nfe ?>" class="btn btn-azul btn-pequeno"><i class="far fa-minus-square"></i> Inutilizar</a></td>
                            <td align="center"><a href="<?php echo URL_BASE ."nfe/cancelarNFE/".$nfe->id_nfe ?>" class="btn btn-vermelho btn-pequeno"><i class="fas fa-trash"></i> Cancelar</a></td>
							<td align="center"><a href="javascript:;" onclick="dados_nota(<?php echo $nfe->id_nfe ?>)" class="btn btn-azul btn-pequeno"><i class="fas fa-edit"></i> Dados</a></td>
                            </td>
                        <?php } ?>
                      
													
                        </tr>												
                  <?php } ?>
					
                    </tbody>
                 </table>
                     <footer class="caixa-rodape"> 
                            <ul class="paginacao text-end">
                                    <li><a href='#' class='link'>1</a></li>
                                    <li><a href='#' class='link'>2</a></li>			
                                    <li><a href='#' class='link'><i class='fas fa-angle-right'></i></a></li>
                                    <li><a href='#' class='link'>Último <i class='fas fa-angle-double-right'></i></a></li>                                     
                            </ul>
                    </footer>
            </div>

								</div>
								
								<!-- qunado não hover pedido 
								
								<div class="caixa p-2">
									<div class="msg msg-verde">
									<p><b><i class="fas fa-check"></i> Mensagem de boas vindas</b> Parabéns seu produto foi inserido com sucesso</p>
									</div>
									<div class="msg msg-vermelho">
									<p><b><i class="fas fa-times"></i> Mensagem de Erro</b> Houve um erro</p>
									</div>
									<div class="msg msg-amarelo">
									<p><b><i class="fas fa-exclamation-triangle"></i> Mensagem de aviso</b> Tem um aviso pra você</p>
									</div>
								</div>
								-->
							</div>
							
						</div>
				</div>
			</div>

<script src="<?php echo URL_BASE ?>assets/js/js_nfe.js"></script>


