<script type="text/javascript" src="<?php echo URL_BASE ?>/assets/js/js_acompanhamento.js"></script>
<section class="conteudo">			
<div class="conteudo-dividido bg-fundo">
    <form action="<?php echo URL_BASE ."nfeproduto/salvar" ?>" method="Post" enctype="multipart/form-data" >
<div class="conteudo-fluido">								
    <div class="rows">	
           
	<?php 
		foreach($composicoes as $produto){ 
		
	?>
   
            <div class="caixa">                  
                    <div class="caixa-titulo">
					<span class="h5 pt-1 d-inline-block mb-0">
					<i class="far fa-list-alt"></i> Engenharia do Produto: <?php echo $produto->produto->produto ?> 
					</span>
					<a href="<?php echo URL_BASE ."ordemproducao/finalizarOrdemProducaoTotal/" .$ordem_producao->id_ordem_producao ?>" class="btn btn-verde btn-medio float-right "> Finalizar Ordem de Produção</a>
							
					</div> 
                   
                    <div class="p-3">
                    <div class="rows pt-3 pb-4">
                           <?php foreach($produto->engenharia as $etapa){ ?>
                            <div class="col-3 d-flex">
                            <div class="caixa">
                                <div class="tabela-responsiva sm">
                        <table cellpadding="0" cellspacing="0">
                                <thead>
                                    <tr>
                                            <th align="center" colspan="2" class="minimo-font"><?php echo $etapa->etapa->processo_produtivo  ?></th>    
                                    </tr>
                                    <tr class="tr-alt">
                                            <th align="left" class="border-top">Peça</th>    
                                            <th align="center" class="border-top">Qtde</th>    
                                    </tr>
                                </thead>
                                <tbody id="lista_engenharia">
                                <?php foreach($etapa->insumos as $insumo) { ?>
                                        <tr>                                                 
                                                <td><?php   echo  $insumo->produto ?></td>   
                                                <td align="center"><?php   echo $insumo->qtde_necessaria ?></td>   

</tr>
                <?php } ?>
                       <tr>  
                               <?php if(!$etapa->etapa->data_inicio){ ?>
                                       <td align="center"><a href="javascript:;" 
                                               data-idItemOrdemProducao="<?php echo $produto->item->id_item_ordem_producao ?>" 
                                               data-idEtapaProducao ="<?php echo $etapa->etapa->id_etapa_producao ?>" 
                                               data-idOpcao ="I" 
                                               onclick="inicio(this)" class="btn btn-pequeno btn-azul d-table">Início</a>
                                       </td>  
                               <?php } ?>

                               <?php if(!$etapa->etapa->data_fim){ ?>
                                       <td align="center"><a href="javascript:;" 
                                               data-idItemOrdemProducao="<?php echo $produto->item->id_item_ordem_producao ?>" 
                                               data-idEtapaProducao ="<?php echo $etapa->etapa->id_etapa_producao ?>" 
                                               data-idOpcao ="F" 
                                               onclick="inicio(this)"  class="btn btn-pequeno btn-verde d-block">Finalizar</a>
                                       </td> 
                               <?php } ?>	

                       </tr>
                       <tr>

                       </tr>
               </tbody>
       </table>
</div>	
<div class="p-2">
        <span id="<?php echo "etapa" .$produto->item->id_item_ordem_producao.$etapa->etapa->id_etapa_producao ?>">
        <?php
                if ($etapa->etapa->inicio_fim =="I"){
                        echo "<span class='msg msg-roxo p-0 d-block text-center h6'> Iniciado</span>";
                } else if ($etapa->etapa->inicio_fim=="F"){
                        echo "<span class='msg msg-verde p-0 d-block text-center h6'> Finalizado</span>";
                } else{
                        echo "<span class='msg msg-amarelo p-0 d-block text-center h6'>Não Iniciado</span>";
                }
        ?>
        </span>

</div>							
</div>
</div>

<?php } ?>							

</div>

</div>                  
    <div class="caixa-rodape">
            <a href="<?php echo URL_BASE ."pedidoproducao/atender_pedido/"  ?>" class="btn btn-azul btn-medio d-inline-block">Iniciar Todos </a>
            <a href="<?php echo URL_BASE ."pedidoproducao/atender_pedido/"  ?>" class="btn btn-verde btn-medio d-inline-block">Finalizar Todos</a>

    </div>

</div>		
  
	
	
<?php } ?>


    </div>
</form>			
</div>
 </section>
 
 <script>
	var id_produto = "<?php // echo $produto->id_produto ?>";
 </script>




