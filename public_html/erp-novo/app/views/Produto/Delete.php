
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">	
  
    <div class="rows">	
        <div class="col-12">
            <div class="col-12">
            <div class="caixa">
		<div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5 mb-0 d-inline-block">
                        <i class="fas fa-search"></i> Deletar Produto
                    </span>
                    <a href="<?php echo URL_BASE ."produto" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                </div>
                  
            </div>
        </div>
        </div>
        
        
        <div class="col-12">
           
            <div class="caixa">
            <div class="px-5">
            <div class="rows pt-3 pb-4">               
                
                <div class="col-4">
                    <label class="text-label">Produto</label>
                    <input type="text" name="produto" value="<?php echo (isset($produto)) ?  $produto->produto : NULL ?>"  id="produto" class="form-campo">												
                </div>
                
           </div>
            </div>
           
        <center>   <div class="col-3 mt-3 mb-5">
                    <a href="<?php echo URL_BASE ."produto/excluir/". $produto->id_produto ?>" class="btn btn-azul d-block m-auto">Excluir o produto</a>
                  
                </div></center>
       
        </div>


        </div>


</div>

    </div>
   
</div>






