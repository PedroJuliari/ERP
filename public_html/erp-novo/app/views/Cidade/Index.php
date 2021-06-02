		
<section class="conteudo">			
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">						
				
    <div class="rows">	
            <div class="col-12">
            <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar cidade</span>
					<form name="busca" action="<?php echo URL_BASE ."cidade/filtro" ?>" method="GET" >
                            <div class="rows p-3">
                                 <div class="col-4">
								
                                         <label class="text-label">Cidade</label>
                                         <input type="text" name="nome_cidade" value="<?php echo isset($pesquisa) ? $pesquisa->nome_cidade: "" ?>" placeholder="Digite aqui..." class="form-campo">
                                 </div>
                                 <div class="col-4">
                                         <label class="text-label">Estado</label>
                                         <select class="form-campo" name="nome_estado">
											 <option value="">Escolha uma Opção</option>
											<?php foreach($estados as $uf){
												$selecionado = (!isset($pesquisa)) ? "" : ($pesquisa->estado==$uf->id_estado) ? "selected" : "";
												echo "<option value='$uf->id_estado' $selecionado>$uf->nome_estado</option>";
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
                    <span class="h5  mb-0 pt-1 d-inline-block"><i class="far fa-list-alt"></i> Pedidos pendentes</span> <small class="d-inline-block text-right mb-0 h6 px-2"><b class="text-azul"><?php echo isset($total) ? $total : "0" ?></b> registros</small>
                    <a href="<?php echo URL_BASE ."cidade/create" ?>" class="btn btn-verde float-right"><i class="fas fa-plus-circle mb-0"></i> Adicionar novo</a>
            </div>	
                    <div class="tabela-responsiva">
                    <table cellpadding="0" cellspacing="0">
                            <thead>
                                    <tr>
                                            <th align="center">Id</th>
                                            <th align="left">Cidade</th>
                                            <th align="center">Estado</th>
                                            <th align="center">IBGE</th>
                                    </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if(isset($cidades)){
                                foreach($cidades as $cidade){ ?>                            					
                                <tr>
                                         <td align="center"><?php echo $cidade->id_cidade ?></td>
                                         <td align="left"><?php   echo $cidade->nome_cidade ?></td>
                                         <td align="center"><?php echo $cidade->nome_estado ?></td>
                                         <td align="center"><?php echo $cidade->ibge_cidade ?></td> 
                               <td align="center">
                                        <a href="<?php echo URL_BASE ."cidade/edit/" . $cidade->id_cidade?>" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>
                                        <a href="<?php echo URL_BASE ."cidade/delet/" . $cidade->id_cidade?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>
                                        </td>										 
                                 </tr>												
                                <?php } } ?>
																
        </tbody>
        </table>
                        
                        
        <footer class="caixa-rodape"> 
                <ul class="paginacao text-end">
                      <?php  echo paginacao($url, $pg, $paginas) ?>
                 </ul>
        </footer>
</div>

</div>
								
								<!-- qunado não hover pedido 
								
								<div class="caixa p-2">
									<div class="msg msg-verde">
									<p><b><i class="fas fa-check"></i> Mensagem de boas vindas</b> Parabéns seu cidade foi inserido com sucesso</p>
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

</section>
	


