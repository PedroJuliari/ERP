<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">	
    <div class="rows">	
        <div class="col-12">
            <div class="caixa">
                <div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5 mb-0 d-inline-block">
                                <i class="fas fa-search"></i> Dados da Ordem : <?php echo $ordem_producao->id_ordem_producao ?>
                        </span>
                        <a href="<?php echo URL_BASE ."ordemproducao" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                        </div>
                 
        </div>
       </div>

    <div class="col-12">
                    <div class="caixa">                    
                    <div class="tabela-responsiva">
                            <table cellpadding="0" cellspacing="0">
                                    <thead>
                                            <tr>
                                                    <th align="center">ID</th>
                                                    <th align="left" width="290">Produto</th>
                                                    <th align="center">Preço</th>
                                                    <th align="center">Qtde Produzir</th>                                                    
                                                    <th align="center">Est. atual</th>
                                                    <th align="center">Est. reservado</th>
                                                    <th align="center">Est. real</th>
                                                    <th align="center">Engenharia</th>
                                                    
                                            </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach($itens as $item){ ?>        
                                    <tr>
                                            <td align="center"><?php echo $item->id_item_ordem_producao ?></td>
                                            <td align="left"><?php echo $item->produto ?></td>
                                            <td align="center">R$ <?php echo moedaBr($item->preco) ?></td>
                                            <td align="center"><?php echo $item->qtde_a_produzir ?></td>                                                    
                                            <td align="center"><?php echo $item->estoque_atual ?></td>                                                    
                                            <td align="center"><?php echo $item->estoque_reservado ?></td>                                                    
                                            <td align="center"><?php echo $item->estoque_real ?></td> 
                                            <td> <a href="<?php echo  URL_BASE ."produtoproducao/engenharia/".$item->id_produto ?>" target="_blank" class="d-block btn btn-outline-verde status digitacao"> Engenharia</a>
                   </td>
                                   
                                   </tr>
                                    <?php } ?>   
                                            	
                                    </tbody>
                            </table>
                          
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