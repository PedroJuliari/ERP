
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">	
   <form action="<?php echo URL_BASE ."contapagar/inserir" ?>" method="post">
    <div class="rows">	
        <div class="col-12">
            <div class="caixa">
		<div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5 mb-0 d-inline-block">
                        <i class="fas fa-search"></i> Nova Conta a Pagar
                    </span>
                    <a href="<?php echo URL_BASE ."contapagar" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                </div>
                  
            </div>
        </div>

        
        <div class="col-12">
            <div class="caixa">
            <span class="h5 caixa-titulo"><i class="far fa-list-alt"></i> Dados do Pagamento</span>

            <div class="caixa">
            <div class="px-5">
            <div class="rows pt-3 pb-4">
                <div class="col-3">
                    <label class="text-label">Categoria</label>
                    <select class="form-campo" name="id_categoria_conta">

                        <?php foreach($categorias as $categoria){ 
                            echo "<option value='$categoria->id_categoria_conta'  > $categoria->categoria</option>";
                        } ?>

                    </select>
                </div>
                
                <div class="col-6">
                    <label class="text-label">Descrição</label>
                    <input type="text" name="descricao"  id="descricao" class="form-campo">												
                </div>
                <div class="col-3">
                    <label class="text-label">Valor </label>
                    <input type="text" name="valor_previsao"   id="valor_previsao" class="form-campo">												
                </div>
                 <div class="col-3">
                    <label class="text-label">Data Emissão</label>
                    <input type="date" name="data_emissao" value="<?php echo date("Y-m-d") ?>"  id="data_emissao" class="form-campo">												
                </div>
                
                <div class="col-3">
                    <label class="text-label">Data Vencimento</label>
                    <input type="date" name="data_vencimento"   id="data_vencimento" class="form-campo">												
                </div>
                <div class="col-4">
                    <label class="text-label">Repetir</label>
                    <select class="form-campo" name="repetir" id="repetir" onchange="forma_parcelamento()">
                        <option value="0">Não</option>
                        <option value="7">Sim, Semanalmente</option>
                        <option value="15">Sim, Quinzenalmente</option>
                        <option value="30">Sim, Mensalmente</option>
                        <option value="60">Sim, Bimestralmente</option>
                        <option value="90">Sim, Trimestralmente</option>
                        <option value="180">Sim, Semestralmente</option>
                        <option value="360">Sim, Anualmente</option>

                    </select>
                </div>
                
              
                <div class="col-2">
                    <label class="text-label">Qtde Vezes</label>
                    <input type="number" min="1" name="qtde_parcela" id="qtde_parcela" onchange="calcParcela()" value="1" class="form-campo">
                </div>
                                    
                           
                </div>
            </div>
            <div class="caixa-rodape">
            <input type="hidden"  name="id_recebivel" value="<?php echo $despesa->id_receber?> " class="btn btn-verde btn-grande d-inline-block">
           <input type="submit"  value="Dar Baixa" class="btn btn-verde btn-grande d-inline-block">
       </div>
        </div>


        </div>


</div>

    </div>
   </form>
</div>
</div>

<script>
    var total = "<?php echo $pedido->total ?>" ;
</script>