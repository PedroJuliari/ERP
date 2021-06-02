<script type="text/javascript" src="<?php echo URL_BASE ?>/assets/js/js_engenharia.js"></script>
<section class="conteudo">			
<div class="bg-fundo">
    <form action="<?php echo URL_BASE ."nfeproduto/salvar" ?>" method="Post" enctype="multipart/form-data" >
<div class="conteudo-fluido">								
    <div class="rows">	
            <div class="col-12">
            <div class="caixa">
            <div class="caixa-titulo py-1 d-inline-block width-100">
				<span class="h5 mb-0 d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Cadastrar Novo Produto</span>							
				<a href="<?php echo URL_BASE ."produtoproducao" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>

			</div>
            
                <div class="rows p-4"> 
                        <div class="col-4">
                                <div class="px-2 border text-center">
                                        <img src="<?php echo  isset($produto) ? URL_IMAGEM .$produto->imagem: URL_IMAGEM ."semproduto.png"  ?>" class="img-fluido opaco">
                                </div>
                        </div>
                        <div class="col-8 px-2 d-flex">
                        <div class="caixa p-3">
                           <div class="rows">
                                <div class="col-12">
                                        <label class="text-label">Titulo do produto</label>
                                        <input type="text" value="<?php echo isset($produto) ? $produto->produto: "" ?>" name="produto" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4">
                                        <label class="text-label">Categoria</label>
                                        <select class="form-campo" name="id_categoria">
                                             
                                            <?php foreach($categorias as $categoria){ 
                                                $selecionado = (!isset($produto)) ? "" : ($produto->id_categoria==$categoria->id_categoria) ? "selected" : "";
                                                echo "<option value='$categoria->id_categoria' $selecionado > $categoria->categoria</option>";
                                            } ?>
                                                
                                        </select>
                                </div>
                                <div class="col-4">
                                        <label class="text-label"  >Código Personalizado</label>
                                        <input type="text" name="codigo_personalizado" value="<?php echo isset($produto) ? $produto->codigo_personalizado: "" ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4">
                                        <label class="text-label">Unidade</label>
                                        <select class="form-campo" name="id_unidade">
                                                <?php foreach($unidades as $unidade){
                                                    $selecionado = (!isset($produto)) ? "" : ($produto->id_unidade==$unidade->id_unidade) ? "selected" : "";
                                                echo "<option value='$unidade->id_unidade' $selecionado > $unidade->unidade</option>";
                                            } ?>
                                        </select>
                                </div>
                               
                                <div class="col-6">
                                        <label class="text-label">Upload da imagem</label>
                                        <input type="file" name="arquivo" class="form-campo">
                                </div>
                                <div class="col-6">
                                        <label class="text-label">Nome do arquivo</label>
                                        <input type="text" value="<?php echo isset($produto) ? $produto->imagem: "" ?>" name="nome_do_arquivo" value="" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4">
                                        <label class="text-label">Preço Alto</label>
                                        <input type="text" name="preco_alto" value="<?php echo isset($produto) ? $produto->preco_alto: "" ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4">
                                        <label class="text-label">Preço atual</label>
                                        <input type="text" name="preco" value="<?php echo isset($produto) ? $produto->preco: "" ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>												

                                <div class="col-4">
                                        <label class="text-label">Ativo</label>
                                        <select class="form-campo" name="ativo">
                                                <option value="S" <?php echo (!isset($produto)) ? "" : ($produto->ativo=="S") ? "selected" : "" ?>>Sim</option>                                                 
                                                <option value="N" <?php echo (!isset($produto)) ? "" : ($produto->ativo=="N") ? "selected" : "" ?> >Não</option> 
                                        </select>
                                </div>
                            
                              
                        </div>
                        </div>
			
                            	
                        </div>
                </div>
              </div>
            </div>
    </div>

        <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="far fa-list-alt"></i> Engenharia do Produto </span>
                    
                    <div class="px-3">
                    <div class="rows pt-3 pb-4" id="lista_engenharia">
                <?php foreach($engenharia as $etapa){ ?>          
                    <div class="col-3 d-flex">                                      
			<div class="caixa">
                                <div class="tabela-responsiva sm">
                                    <table cellpadding="0" cellspacing="0" class="mb-0">
                                            <thead>
                                                <tr>
                                                   <th align="center" colspan="2" class="minimo-font"><?php echo $etapa->etapa->processo_produtivo ?></th>    
                                                </tr>
                                            
                                                <tr class="tr-alt">
                                                        <th align="left" class="border-top">Peça</th>    
                                                        <th align="center" class="border-top">Qtde</th>    
                                                </tr>
                                              
                                                </thead>
                                                
                                                    <tbody id="lista_insumos">
                                                           <?php 
                                                                if ($etapa->insumos){ 
                                                                    foreach ($etapa->insumos as $insumo){
                                                               ?>
                                                            <tr>                                                 
                                                                    <td><?php echo $insumo->produto ?></td>   
                                                                    <td align="center"><?php echo $insumo->qtde_necessaria ?></td>   

                                                            </tr>
                                                                    <?php } } else{
                                                            echo "<te><td>sem insumos</td></tr>";
                                                }    ?>

                                                    </tbody>
                                                 
                                                
                                    </table>								
				</div>
                            </div>
							
                        </div>
													
                <?php } ?>					
                        </div>
                     
                    </div>
                    
			</div>

	
    <div class="rows">
       <div class="col-6">
           <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="far fa-list-alt"></i> Etapas da Produção do Produto</span>
                   <div class="px-3 py-3">
                    <div class="caixa">                    
                    <div class="rows p-3 pb-4">
                            <div class="col-9">
                                    <label class="text-label">Processo Produtivo</label>
                                    <select class="form-campo" name="id_processo_produtivo" id="id_processo_produtivo" >
                                        <option value=""  > Selecione uma Opção</option>
                                        <?php  foreach ($processos as $processo) {
                                            echo "<option value='$processo->id_processo_produtivo' > $processo->processo_produtivo</option>";
                                        } ?>
                                            

                                    </select>
                                    </div>								
                  
                            <div class="col-3 mt-4">
                                <input type="hidden" id="id_produto" name="id_produto">
                                <input type="button" class="btn btn-verde btn-pequeno d-inline-block width-100  h6 mb-0"  value="Inserir" id="btnInserirEtapa">
                            </div>
			     <!-- <div class="col-2">
                                <input type="button" onClick="teste()" class="btn btn-verde btn-medio d-inline-block inserir"  value="Teste" >
                            </div>-->
							
                        </div>
                     
                    </div>
                    
                    
                    </div>
                        
                   
    <div class="px-3 py-3">
    <div class="caixa">
        <div class="tabela-responsiva sm">
        <div class="rolagem-tabela2">
            <table cellpadding="0" cellspacing="0">
                    <thead>
                            <tr>
                                    <th align="center">Item</th>
                                    <th align="left" width="380">Etapa</th>      
                                    <th align="center" width="40">Excluir</th>      

                            </tr>
                    </thead>
                    <tbody id="lista_etapa">
                 <?php foreach($etapas as $etapa){ ?>
                    <tr>
                            <td align="center"><?php echo $etapa->id_etapa_producao ?></td>
                            <td align="left"><?php echo $etapa->processo_produtivo ?></td>			
                            <td align="center">
                        <a href='javascript:;' onclick='excluir_etapa(<?php echo $etapa->id_etapa_producao ?> )' class='btn btn-pequeno btn-vermelho  d-inline-block' title='Excluir'><i class="fas fa fa-trash"></i> Excluir</a>

                        </td>	

                    </tr>
                 <?php } ?> 	
                    </tbody>
            </table>
                          
						<div>
                    </div>
                    </div>
                    </div>
             </div>
    </div>
	
</div>
</div>

 <div class="col-6">
 <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="far fa-list-alt"></i> Composição do Produto</span>
					<div class="px-3 py-3">
                    <div class="caixa">
                    <div class="rows p-3 pb-4">
                    <div class="col-4">
                            <label class="text-label">Insumo</label>
                            <select class="form-campo" name="id_insumo" id="id_insumo">
                                 <?php foreach($insumos as $insumo){ 
                                    echo "<option value='$insumo->id_produto' > $insumo->produto</option>";
                                } ?>
                                   

                            </select>
                    </div>
                    <div class="col-4">
                            <label class="text-label">Etapas</label>
                            <select class="form-campo" name="id_etapa" id="id_etapa" >
                                  <?php foreach($etapas as $etapa){ 
                                        echo "<option value='$etapa->id_etapa_producao' $selecionado > $etapa->processo_produtivo</option>";
                                } ?>
                            </select>
                            </div>
						
								
                            <div class="col-2">
                                <label class="text-label">Qtde</label>
                                <input type="number" name="qtde"   id="qtde" value="1" class="form-campo" onChange="calcSubtotal()" />
                           </div>                           
                        
                            <div class="col-2 mt-4">
                                <input type="hidden" id="id_produto" name="id_produto">
                                <input type="button" class="btn btn-verde d-inline-block btn-pequeno h6 mb-0"  value="Inserir" id="btnInserirComposicao">
                            </div>
                        </div>
                                        
                    
                    </div>
                    </div>

                    <div class="px-3 py-3">
                    <div class="caixa">
                    <div class="tabela-responsiva sm">
						<div class="rolagem-tabela2">
                            <table cellpadding="0" cellspacing="0">
                                    <thead>
                                            <tr>
                                                    <th align="center">Item</th>
                                                    <th align="left" width="290">Produto</th>
                                                    <th align="center">Qtde</th>      
                                                    <th align="center">Valor</th>      
                                                    <th align="center">Subtotal</th>      
                                                    <th align="center">Opção</th>      
                                                    
                                            </tr>
                                    </thead>
                                    <tbody id="lista_composicao"> 
                               <?php foreach($composicao as $insumo){ ?>
                                    <tr>
                                            <td align="center"><?php echo $insumo->id_produto ?></td>
                                            <td align="left"><?php echo $insumo->produto ?></td>
                                            <td align="center"><?php echo $insumo->qtde_necessaria ?></td>	
                                            <td align="center">R$ <?php echo $insumo->preco ?></td>	
                                            <td align="center">R$ <?php echo $insumo->preco * $insumo->qtde_necessaria ?></td>	
                                            <td><a href="javascript:;" onclick="excluir_composicao(<?php echo $insumo->id_produto_composicao ?>)" class='btn btn-pequeno btn-vermelho d-inline-block' title='Excluir'><i class='fas fa-trash'></i></a></td>	

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
</form>			
</div>
 </section>
 
 <script>
	var id_produto = "<?php echo $produto->id_produto ?>";
 </script>




