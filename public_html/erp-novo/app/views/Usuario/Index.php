<div class="conteudo-dividido bg-fundo">				
    <div class="conteudo-fluido">								

        <div class="rows">	
                <div class="col-12">
                <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar por Usuário</span>
                    <form name="busca" action="<?php echo URL_BASE ."usuario/filtro" ?>" method="GET" >
                        
                        <div class="px-4 pb-5 pt-4 ">
                                <div class="rows">
                                        <div class="col-10">	
                                                <label class="text-label d-block">Nome </label>
                                                <input type="text" name="q" value="<?php echo isset($q) ? $q : null ?>" placeholder="Digite aqui..." class="form-campo">
                                        </div>
                                        <div class="col-2 mt-4">
                                                <input type="submit" value="Pesquisar" class="btn btn-azul text-uppercase">
                                        </div>
                                </div>
                        </div>
                    </form>
                </div>
                </div>

		<div class="col-12">
            <div class="caixa">
                <div class="caixa-titulo py-1 d-inline-block width-100">
                        <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Lista de Usuários <small class="d-inline-block text-right mb-0 h6 px-2"><b class="text-azul"><?php echo isset($total) ? $total : "0" ?></b> registros</small></span>
                        <a href="<?php echo URL_BASE ."usuario/create" ?>" class="btn btn-verde float-right"><i class="fas fa-plus-circle mb-0"></i> Adicionar novo</a>
                </div>
                    <div class="tabela-responsiva">
                    <table cellpadding="0" cellspacing="0">
                            <thead>
                                    <tr>                                            
                                            <th align="center">Id</th>
                                            <th align="left" >Login</th>
                                            <th align="center">Email</th>
                                            <th align="center">Data</th>
                                            <th align="center" colspan="3">Ação</th>
                                    </tr>
                            </thead>
                            <tbody>                                      
                       <?php 
                            $i=1;
                            if(isset($usuarios)){
                            foreach($usuarios as $usuario){
                       ?>
                            <tr>
                                <td align="center"><?php echo $usuario->id_usuario ?></td>
                                <td align="left"><?php echo $usuario->login ?></td>
                                <td align="left"><?php echo $usuario->email ?></td>
                                <td align="left"><?php echo databr($usuario->data_cadastro,0) ?></td>
                                											
                                <td align="center">
                                        <a href="<?php echo URL_BASE ."usuario/edit/" . $usuario->id_usuario?>" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>
                                        <a href="<?php echo URL_BASE ."usuario/delet/" . $usuario->id_usuario?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>
                                        <a href="<?php echo URL_BASE ."permissao/index/" . $usuario->id_usuario ?>" class="d-inline-block btn btn-outline-verde btn-pequeno"><i class="fas fa-info-circle"></i> Permissões</a>
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
