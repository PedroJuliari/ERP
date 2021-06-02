		
<section class="conteudo">			
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">						
				
    <div class="rows">	
            <div class="col-12">
            <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar produto</span>
					<form name="busca" action="<?php echo URL_BASE ."produto/filtro" ?>" method="GET" >
                            <div class="rows p-3">
                                 <div class="col-3">
                                         <label class="text-label">Produto</label>
                                         <input type="text" name="produto" value="<?php echo isset($pesquisa) ? $pesquisa->produto: "" ?>" placeholder="Digite aqui..." class="form-campo">
                                 </div>
								 
                             
                                 <div class="col-4">
                                         <label class="text-label">Categoria</label>
                                         <select class="form-campo" name="idCategoria">
                                                    <option value="">Escolha uma Opção</option>
                                                   <?php foreach($categorias as $categoria){
                                                           $selecionado = (!isset($categoria)) ? "" : ($categoria->id_categoria==$pesquisa->idCategoria) ? "selected" : "";
                                                           echo "<option value='$categoria->id_categoria' $selecionado>$categoria->categoria</option>";
                                                   }
                                                    ?>
                                         </select>
                                 </div>
								  <div class="col-1 mt-4">
                                       <input type="submit" value="Ok" class="btn btn-warning text-uppercase">
                                   </div>
                                 </div>
								 <form>
                            </div>
                        </div>
     
								
							
							
    <div class="col-12">
            <div class="caixa">
            <div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5  mb-0 pt-1 d-inline-block"><i class="far fa-list-alt"></i> Lista de Produtos </span> <small class="d-inline-block text-right mb-0 h6 px-2"><b class="text-azul"><?php echo isset($total) ? $total : "0" ?></b> registros</small>
                    <a href="<?php echo URL_BASE ."produto/create" ?>" class="btn btn-verde float-right"><i class="fas fa-plus-circle mb-0"></i> Adicionar novo</a>
            </div>	
                    <div class="tabela-responsiva">
            <table cellpadding="0" cellspacing="0">
                    <thead>
                            <tr>
                                    <th align="center">Id</th>
                                    <th align="center" width="20">Imagem</th>
                                    <th align="left">Produto</th>
                                    <th align="center">Preço</th>
                                    <th align="center">idCategoria</th>
                                    <th align="center">Estoque</th>
                                    <th align="center" colspan="2">Ação</th>
                            </tr>
                    </thead>
                    <tbody>

                    <?php 
                    if(isset($produtos)){
                        foreach($produtos as $produto){ ?>
                        <tr>
                                <td align="center"><?php echo $produto->id_produto ?></td>
                                <td align="center"><img src="<?php echo URL_IMAGEM . $produto->imagem ?>" class="img-fluido radius-circulo opaco" width="40"></td>
                                <td align="left"><?php echo $produto->produto ?></td>
                                <td align="center"><?php echo $produto->preco ?></td>
                                <td align="center"><?php echo $produto->id_categoria ?></td>                                     					 
                                <td align="center"><?php echo $produto->estoque_atual?></td>                                     					 

                                 <td align="center">
                                    <a href="<?php echo URL_BASE ."produto/engenharia/" .$produto->id_produto ?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Engenharia</a>										 
                                    <a href="<?php echo URL_BASE ."produto/delet/" .$produto->id_produto ?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>
                                </td>
                         </tr>												
                    <?php } } ?>        
																
        </tbody>
        </table>
                        
                        
        <footer class="caixa-rodape"> 
                <ul class="paginacao text-end">
                      <?php echo paginacao($url, $pg, $paginas) ?>
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

</section>
	


