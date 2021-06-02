<section class="conteudo">			
<div class="conteudo-dividido bg-fundo">
    <form action="<?php echo URL_BASE ."produto/salvar" ?>" method="Post" enctype="multipart/form-data" >
<div class="conteudo-fluido">								
    <div class="rows">	
            <div class="col-12">
            <div class="caixa">
            <div class="caixa-titulo py-1 d-inline-block width-100">
                                    <span class="h5 mb-0 d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Cadastrar Novo Produto</span>							
                                    <a href="<?php echo URL_BASE ."produto/" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>

                    </div>
            
                <div class="rows p-4"> 
                        <div class="col-4">
                               
							    <div class="py-1 px-2 mt-3 border text-center">
                                      <br><br><br>  <img src="<?php echo  isset($produto) ? URL_IMAGEM .$produto->imagem: URL_IMAGEM ."semproduto.png"  ?>" class="img-fluido opaco">
                                </div>
                        </div>
                        <div class="col-8 px-2">
                           <div class="rows">
                                <div class="col-12">
                                        <label class="text-label">Titulo do produto</label>
                                        <input type="text" value="<?php echo isset($produto) ? $produto->produto: "" ?>" name="produto" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4">
                                        <label class="text-label">Categoria</label>
                                        <select class="form-campo" name="id_categoria">
                                             
                                           <?php foreach($categorias as $categoria){
                                                           $selecionado = (!isset($categoria)) ? "" : ($categoria->id_categoria==$pesquisa->id_categoria) ? "selected" : "";
                                                           echo "<option value='$categoria->id_categoria' $selecionado>$categoria->categoria</option>";
                                                   }
                                                    ?>
                                                
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
                                        <input type="text" value="<?php echo isset($produto) ? $produto->imagem: "" ?>" name="imagem" value="" placeholder="Digite aqui..." class="form-campo">
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
			
                            <div class="col-12 mt-4  pb-5">
                                    <input type="hidden" name="id_produto" value="<?php echo isset($produto) ? $produto->id_produto: null ?>" >
                                    <input type="submit" value="Salvar alterações" class="btn btn-verde btn-medio d-block m-auto">
                            </div>	
                        </div>
                </div>
              </div>
            </div>
    </div>	

    </div>
</form>			
</div>
 </section>




