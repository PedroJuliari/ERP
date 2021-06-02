<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">
    <div class="rows">	        
<div class="col-12">
    <div class="caixa">
    <div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5 mb-0 d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Excluir plano de conta</span>							
                    <a href="<?php echo URL_BASE ."planoconta" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>

    </div>
        
            <div class="col-6 d-block m-auto rows px-5 mt-5">
                <div class="col-12 mb-3">
                    <label class="text-label">Nome</label>	
                    <input type="text" name="codigo" value="<?php echo isset($planoconta) ? $planoconta->codigo : null ?>" class="form-campo" placeholder="Digite o nome da planoconta">
                </div>
                <div class="col-12 mb-3">
                    <label class="text-label">Descrição</label>	
                    <input type="text" name="plano_conta" value="<?php echo isset($planoconta) ? $planoconta->plano_conta : null ?>" class="form-campo" placeholder="Digite o nome da planoconta">
                </div>                                    
                <div class="col-12 mt-3 mb-5">
                    <a href="<?php echo URL_BASE ."planoconta/excluir/". $planoconta->id_plano_conta ?>" class="btn btn-azul d-block m-auto">Excluir Categoria</a>
                  
                </div>
            </div>
       
    </div>
</div>
    </div>
</div>
</div>
