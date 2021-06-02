<div class="conteudo-dividido bg-fundo">				
	<div class="conteudo-fluido">	
		<div class="rows">	
			<div class="col-12">
			<div class="caixa">
				<span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar por cliente</span>
				<form name="busca" action="<?php echo URL_BASE ."contato/filtro" ?>" method="GET" >
				<div class="px-4 pb-5 pt-4 ">
					<div class="rows">
							<div class="col-6 mb-4">
								<label class="text-label d-block">Nome </label>									
								<input type="text" name="q" value="<?php echo isset($pesquisa) ? $pesquisa->q: "" ?>" placeholder="Digite aqui..." class="form-campo">
							</div>
							<div class="col-6 mb-4">
								<label class="text-label d-block">Email </label>									
								<input type="text" name="email" value="<?php echo isset($pesquisa) ? $pesquisa->email: "" ?>" placeholder="Digite aqui..." class="form-campo">
							</div>
							<div class="col-3 mb-4">	
							   <div class="check"><input type="checkbox"  name="eh_cliente" <?php echo isset($pesquisa->eh_cliente) ? "checked": "" ?> value="S" class="form-campo" id="cliente"><label for="cliente"></label> <strong class="text-label d-inline-block">Cliente </strong></div>
							</div>
							<div class="col-3 mb-4">															
								<div class="check"><input type="checkbox" name="eh_fornecedor" <?php echo isset($pesquisa->eh_fornecedor) ? "checked": "" ?> value="S" class="form-campo"id="fornecedor"><label for="fornecedor"></label> <strong class="text-label d-inline-block">Fornecedor</strong></div>
							</div>
							<div class="col-3 mb-4">							
								<div class="check"><input type="checkbox" name="eh_transportador" <?php echo isset($pesquisa->eh_transportador) ? "checked": "" ?>  value="S" class="form-campo" id="transportador"><label for="transportador"></label> <strong class="text-label d-inline-block">Transportador</strong></div>
							</div>
							
							<div class="col-3 mt-0">
								<input type="submit" value="Pesquisar" class="btn btn-warning text-uppercase width-100">
							</div>
						
						</div>
					</div>
					</form>
				</div>
			</div>
                                 
								
								
			<div class="col-12">
				<div class="caixa">
				<div class="caixa-titulo py-1 d-inline-block width-100">
						<span class="h5  mb-0 pt-1 d-inline-block"><i class="far fa-list-alt"></i> Lista de cliente <small class="d-inline-block text-right mb-0 h6 px-2"><b class="text-azul"><?php echo isset($total) ? $total : "0" ?></b> registros</small></span>
						<a href="<?php echo URL_BASE ."contato/create"  ?>" class="btn btn-verde float-right"><i class="fas fa-plus-circle mb-0"></i> Adicionar novo</a>
				</div>
				<div class="tabela-responsiva">
				<table cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<th align="center">Id</th>
							<th align="left" width="25%">Nome</th>
							<th align="center" width="25%">email</th>
							<th align="center">Fone</th>
							<th align="center" colspan="3">Ação</th>
						</tr>
					</thead>
					<tbody>
				 <?php 
                                 if(isset($contatos)){
                                 foreach($contatos as $contato) { ?>       
						<tr>
							<td align="center"><?php echo $contato->id_contato ?></td>
							<td align="left"><?php echo $contato->nome ?></td>
							<td align="center"><?php echo $contato->email ?></td>
							<td align="center"><?php echo $contato->fone ?></td>											
							<td align="center">
								<a href="<?php echo URL_BASE ."contato/edit/" .$contato->id_contato ?>" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>
								<a href="<?php echo URL_BASE ."contato/delete/" .$contato->id_contato ?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>
							</td>
						</tr>
                                 <?php } } ?>       		
					</tbody>
					</table>
						<footer class="caixa-rodape"> 
							<ul class="paginacao text-end">
									 <?php echo  paginacao($url, $pg, $paginas) ?>
							 </ul>
						</footer>
					</div>

					</div>


			</div>

			</div>
				</div>
			</div>