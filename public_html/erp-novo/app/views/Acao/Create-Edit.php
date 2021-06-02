<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">
    <div class="rows">	        
<div class="col-12">
    <div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                                    <span class="h5 mb-0 d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Inserir ação</span>							
                                    <a href="<?php echo URL_BASE ."acao" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>

                    </div>
        <form action="<?php echo URL_BASE ."acao/salvar" ?>" method="Post">
            <div class="col-6 d-block m-auto rows px-5 mt-5">
                <div class="col-12 mb-3">
                    <label class="text-label">Nome ação</label>	
                    <input type="text" name="acao" value="<?php echo isset($acao) ? $acao->acao : null ?>" class="form-campo" placeholder="Digite o nome da acao">
                </div>
                <div class="col-12 mb-3">
                        
                     
                </div>                                    
                <div class="col-12 mt-3 mb-5">
                    <input type="hidden" name="id_acao" value="<?php echo isset($acao) ? $acao->id_acao : null ?>" >
                    <input type="submit" name="" value="Cadastrar acao" class="btn btn-azul d-block m-auto">
                </div>
            </div>
        </form>
    </div>
</div>
    </div>
</div>
</div>
