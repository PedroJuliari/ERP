

<header class="bg-topo">
        <div class="conteudo">
        <div class="navbar">
                <a href="" class="mobmenu"><!--menu mobile--><i class="fas fa-bars"></i></a>
                <a href="index.html" class="logo" alt="ERP completa"><img src="<?php echo URL_BASE ?>assets/img/logo.png" class="img-fluido"></a>	
                       
					   <div class="bg-temas">
                               
                                  <input type="radio" class="cor-claro" name="temas" id="claro"> <?php $_SESSION["CONFIG"]->layout=="tema-claro"?><label for="claro" onclick="mudarLayout('claro')"></label>
								 <input type="radio" class="cor-escuro" name="temas" id="escuro"> <?php $_SESSION["CONFIG"]->layout=="tema-dark"?><label for="escuro" onclick="mudarLayout('dark')"></label>
                        
						 </div>
                <ul class="menutopo">
                        <li id="button"><img src="<?php echo URL_BASE ?>assets/img/foto.png" class="img"> <span><?php echo $_SESSION["usuariologado"]->login;?> </span></li>				
                        <ul id="effect" class="newClass">
                                <li><a href="<?php echo URL_BASE."login/logoff" ?>"><i class="fas fa-sign-in-alt"></i> Sair</a></li>
                        </ul>
                </ul>

        </div>
		</div>
		
		 
</header>

<?php include "menu.php" ?>
                