
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">	
   <form action="<?php echo URL_BASE ."usuario/salvar" ?>" method="post">
    <div class="rows">	
        <div class="col-12">
            <div class="col-12">
            <div class="caixa">
		<div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5 mb-0 d-inline-block">
                        <i class="fas fa-search"></i> Cadastro de usuarios
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
                    <label class="text-label">Nome-login</label>
                    <input type="text" name="login" value="<?php echo (isset($usuario)) ?  $usuario->login : NULL ?>"  id="login" class="form-campo">												
                </div>
                
                 <div class="col-3">
                    <label class="text-label">Email</label>
                    <input type="text" name="email" value="<?php echo (isset($usuario)) ?  $usuario->email : NULL ?>"  id="email" class="form-campo">												
                </div>
				    <div class="col-3">
                    <label class="text-label">Senha</label>
                    <input type="text" name="senha" value="<?php echo (isset($usuario)) ?  $usuario->senha : NULL ?>"  id="senha" class="form-campo">												
                </div>
				<div class="col-3">
				<br>
				 <select class="form-campo" name="administrador">
											 <option value="S">Sim é Administrador</option>
											 <option value="N">Não é Administrador</option>
				                    </select>
				
                 </div>
               
               
                
           </div>
            </div>
            <div class="caixa-rodape">
            <input type="hidden"  name="id_usuario" value="<?php echo (isset($usuario)) ?  $usuario->id_usuario : NULL ?>" class="btn btn-verde btn-grande d-inline-block">
           <input type="submit"  value="Salvar Dados" class="btn btn-verde btn-grande d-inline-block">
       </div>
        </div>


        </div>


</div>
</form>
    </div>
   
</div>


