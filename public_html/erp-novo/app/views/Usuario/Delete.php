
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">	
  
    <div class="rows">	
        <div class="col-12">
            <div class="col-12">
            <div class="caixa">
		<div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5 mb-0 d-inline-block">
                        <i class="fas fa-search"></i> Cadastro de Usuários 
                    </span>
                    <a href="<?php echo URL_BASE ."usuario" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                </div>
                  
            </div>
        </div>
        </div>
        
        
        <div class="col-12">
           
            <div class="caixa">
            <div class="px-5">
            <div class="rows pt-3 pb-4">               
                
                <div class="col-4">
                    <label class="text-label">Email</label>
                    <input type="text" name="email" value="<?php echo (isset($usuario)) ?  $usuario->email : NULL ?>"  id="email" class="form-campo">												
                </div>
                
                 <div class="col-3">
                    <label class="text-label">Login</label>
                    <input type="text" name="login" value="<?php echo (isset($usuario)) ?  $usuario->login : NULL ?>"  id="login" class="form-campo">												
                </div>
                
                <div class="col-3">
                    <label class="text-label">senha </label>
                    <input type="password" name="senha"  value="<?php echo (isset($usuario)) ?  $usuario->senha : NULL ?>" id="senha" class="form-campo">												
                </div>
                <div class="col-2">
                <label class="text-label">Administrador</label>
                <select class="form-campo" name="administrador">
                        <option value="S" <?php echo (!isset($usuario)) ? "": ($usuario->administrador=="S") ? "selected" :""  ?>>Sim</option>                                                 
                        <option value="N" <?php echo (!isset($usuario)) ? "": ($usuario->administrador=="N") ? "selected" :""  ?>>Não</option> 
                </select>
            </div>
                
           </div>
            </div>
           
        <center>   <div class="col-3 mt-3 mb-5">
                    <a href="<?php echo URL_BASE ."usuario/excluir/". $usuario->id_usuario ?>" class="btn btn-azul d-block m-auto">Excluir usuario</a>
                  
                </div></center>
       
        </div>


        </div>


</div>

    </div>
   
</div>






