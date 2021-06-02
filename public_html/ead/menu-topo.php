


<ul class="conteudo">
			<?php
$modulos = consultar("modulo","ativo_modulo='S'");
foreach($modulos as $modulo){	


?>
<li><a href="#"><?php echo $modulo['titulo_modulo']?></a></li>
<?php }?>
</ul>


