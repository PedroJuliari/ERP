<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">
    <div class="rows">	        
<div class="col-12">
    <div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                                    <span class="h5 mb-0 d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Inserir cidade</span>							
                                    <a href="<?php echo URL_BASE ."cidade" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>

                    </div>
        <form action="<?php echo URL_BASE ."cidade/inserir" ?>" method="POST">
            <div class="col-6 d-block m-auto rows px-5 mt-5">
                <div class="col-12 mb-3">
                    <label class="text-label">Cidade</label>	
                    <input type="text" name="nome_cidade" value="<?php echo isset($cidade) ? $cidade->nome_cidade:null;?>" class="form-campo" placeholder="Digite o nome da cidade">
                </div>
				<div class="col-12 mb-3">
                    <label class="text-label">ibge</label>	
                    <input type="text" name="ibge_cidade" value="<?php echo isset($cidade) ? $cidade->ibge_cidade:null;?>" class="form-campo" placeholder="Digite o nome da cidade">
                </div>
                <div class="col-12 mb-3">
                       
                       
						 <select class="form-campo" name="id_estado">
											<?php foreach($estados as $uf){?>
												<?php $selecionado = (!isset($pesquisa)) ? "" : ($pesquisa->estado==$uf->id_estado) ? "selected" : "";?>
												<option value="<?php echo $uf->id_estado?><?php echo $selecionado;?>"><?php echo $uf->nome_estado?></option>";
										
                                         </select>
                     	<?php } ?>
                </div>                                    
                <div class="col-12 mt-3 mb-5">
		 <input type="hidden"  name="id_cidade" value="<?php echo (isset($cidade)) ?  $cidade->id_cidade :null;?>" class="btn btn-verde btn-grande d-inline-block">
                    <input type="submit" name="" value="Cadastrar cidade" class="btn btn-azul d-block m-auto">
                </div>
            </div>
        </form>
    </div>
</div>
    </div>
</div>
</div>
