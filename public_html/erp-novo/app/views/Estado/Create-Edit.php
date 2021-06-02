<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">
    <div class="rows">	        
<div class="col-12">
    <div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                                    <span class="h5 mb-0 d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Inserir estado</span>							
                                    <a href="<?php echo URL_BASE ."estado" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>

                    </div>
        <form action="<?php echo URL_BASE ."estado/salvar" ?>" method="Post">
            <div class="col-6 d-block m-auto rows px-5 mt-5">
                <div class="col-12 mb-3">
                    <label class="text-label">Estado</label>	
                    <input type="text" name="nome_estado" value="<?php echo isset($estado) ? $estado->nome_estado : null ?>" class="form-campo" placeholder="Digite o nome da estado">
                </div>
                <div class="col-12 mb-3">
                        <div class="col-12 mb-3">
                    <label class="text-label">Uf-Estado</label>	
                    <input type="text" name="uf_estado" value="<?php echo isset($estado) ? $estado->uf_estado : null ?>" class="form-campo" placeholder="Digite o nome da estado">
                </div>
                     
                </div>  
                <div class="col-12 mb-3">
                        <div class="col-12 mb-3">
                    <label class="text-label">Codigo-Estado</label>	
                    <input type="text" name="codigo_estado" value="<?php echo isset($estado) ? $estado->codigo_estado : null ?>" class="form-campo" placeholder="Digite o nome da estado">
                </div>
                     
                </div> 				
                 <div class="caixa-rodape">
            <input type="hidden"  name="id_estado" value="<?php echo (isset($estado)) ?  $estado->id_estado : NULL ?>" class="btn btn-verde btn-grande d-inline-block">
           <input type="submit"  value="Salvar Dados" class="btn btn-verde btn-grande d-inline-block">
       </div>
            </div>
        </form>
    </div>
</div>
    </div>
</div>
</div>
