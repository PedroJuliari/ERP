<section class="conteudo">			
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">						
				
    <div class="rows">	
    <div class="col-12">
    <div class="caixa">
            <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Inserir Despesas</span>
                <form name="busca" action="<?php echo URL_BASE ."despesa/salvar" ?>" method="POST" >
                    <div class="rows p-3">
                         <div class="col-3">
                         <label class="text-label">Tipo Despesa</label>
                        <select class="form-campo" name="id_tipo_despesa">

                            <?php foreach($tipos as $tipo){ 
                                $selecionado = (!isset($tipo_despesa)) ? "" : ($despesa->id_tipo_despesa==$tipo->id_tipo_despesa) ? "selected" : "";
                                echo "<option value='$tipo->id_tipo_despesa' $selecionado > $tipo->tipo_despesa</option>";
                            } ?>

                        </select>
                         </div>
                        <div class="col-3">
                             <label class="text-label">Data Lançamento</label>	
                            <input type="date" name="lancamento" value="<?php echo isset($despesa) ? $despesa->data_lancamento : null ?>" class="form-campo" placeholder="Digite o nome da banco">
                        </div>
                        <div class="col-6 mb-3">
                            <label class="text-label">Previsão Pagamento</label>	
                            <input type="date" name="previsao" value="<?php echo isset($despesa) ? $despesa->prev_pagamento : null ?>" class="form-campo" placeholder="Digite o nome da banco">
                        </div>
                        <div class="col-6 mb-3">
                            <label class="text-label">Valor Previsto</label>	
                            <input type="text" name="valor" value="<?php echo isset($despesa) ? $despesa->valor_previsto : null ?>" class="form-campo" placeholder="Digite o nome da banco">
                        </div>
                        <div class="col-6 mb-3">
                            <label class="text-label">Descrição</label>	
                            <input type="text" name="descricao" value="<?php echo isset($despesa) ? $despesa->descricao_despesa : null ?>" class="form-campo" placeholder="Digite o nome da banco">
                        </div>

                           <div class="col-12 mt-3 mb-5">
                                <input type="hidden" name="id_despesa" value="<?php echo isset($despesa) ? $despesa->id_despesa : null ?>" >
                                <input type="submit" name="" value="Salvar" class="btn btn-azul d-block m-auto">
                            </div>
                         
                         </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>




