
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">	
   <form action="<?php echo URL_BASE ."tabela/salvar" ?>" method="post">
    <div class="rows">	
        <div class="col-12">
            <div class="col-12">
            <div class="caixa">
		<div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5 mb-0 d-inline-block">
                        <i class="fas fa-search"></i> Cadastro de Tabelas
                    </span>
                    <a href="<?php echo URL_BASE ."tabela" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                </div>
                  
            </div>
        </div>
        </div>
        
        
        <div class="col-12">
           
            <div class="caixa">
            <div class="px-5">
            <div class="rows pt-3 pb-4">               
                
                <div class="col-4">
                    <label class="text-label">Tabela</label>
                    <input type="text" name="nome_tabela" value="<?php echo (isset($tabela)) ?  $tabela->nome_tabela : NULL ?>"  id="nome_tabela" class="form-campo">												
                </div>
				 <div class="col-4">
                    <label class="text-label">Ativo Tabela</label>
                    <input type="text" name="ativo_tabela" value="<?php echo (isset($tabela)) ?  $tabela->ativo_tabela : NULL ?>"  id="ativo_tabela" class="form-campo">												
                </div>
                
                
                
                
                
                
           </div>
            </div>
            <div class="caixa-rodape">
            <input type="hidden"  name="id_tabela" value="<?php echo (isset($tabela)) ?  $tabela->id_tabela : NULL ?>" class="btn btn-verde btn-grande d-inline-block">
           <input type="submit"  value="Salvar Dados" class="btn btn-verde btn-grande d-inline-block">
       </div>
        </div>


        </div>


</div>
</form>
    </div>
   
</div>


