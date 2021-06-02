<?php
@$ordem = $_GET["ordem"]?$_GET["ordem"]:0;
@$pesq = $_GET["pesq"]?$_GET["pesq"]:"";
@$campo = $_GET["campo"]?$_GET["campo"]:"";

?>
				<h2>MÓDULOS</h2>
				<div class="base-lista">
					<table>
						<tbody>
							<form action="index.php" method="get"name="buscarusuario" id="buscarusuario">
								<tr>
									<th width="16%"><strong>Buscar:</strong></th>
									<th width="60%"><input type="text" name="pesq" value="<?php echo $pesq?>"></th>
									<th width="16%">
										<select name="campo">
											<option value="titulo_aula">Aula</option>
											
										</select>
									</th>
									
									<input type="hidden" name="link" value="10"/>
									
									
									<th><input type="submit" name="Submit"value="" class="but"></th>
								</tr>
								</form>
						</tbody>
					</table>
					<div class="cx-lista">
						<h1>LISTA DE MÓDULOS</h1>

							<a href="index.php?link=6" class="btn">CADASTRAR AULAS</a>
							<p class="limpar separa"></p>
							
							<?php 
							
							
							if($pesq!=""){
								
							$sql1="SELECT id_aula FROM aula WHERE $campo LIKE'%$pesq%'";	
							$sql2="SELECT * FROM aula WHERE $campo LIKE'%$pesq%'";
							$complemento="&pesq=$pesq&campo=$campo";
							
							}else{
								
							$sql1 ="Select id_aula from aula";	
							$sql2 ="Select * from aula";	
							$complemento="";
							
							}
							$total = total($sql1);
							echo"Total de registros: $total";
							
							if ($total <=0)
								echo"nenhum registro";
							
							else{
							?>
							<table cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
										<td align="left" class="tdtt">ID</td>
										<td align="left" class="tdtt" width="56%">Titulo da aula</td>										
										<td align="center" class="tdtt">Ativo</td>
										<td colspan="2" align="center" class="tdtt">Alteração</td>
									
									</tr>
							
									
										<?php 
									$lpp =10;
									$inicio = $ordem *$lpp;
								
						
									
									$aulas = selecionar("$sql2 LIMIT $inicio,$lpp");
									$i=0;
									
									foreach($aulas as $aula){
										if ($i%2==0)
											$col="linha1";
										else
											$col="linha2";
									
									?>
								<tr class="<?php echo $col;?>">
										<td align="left"><?php echo $aula["id_aula"];?></td>
										<td align="left"><?php echo $aula["titulo_aula"];?></td>
										<td align="left"><?php echo $aula["ativo_aula"];?></td>
										<td align="center"><a href="index.php?link=6&acao=Editar&id=<?php echo $aula["id_aula"];?>" class="btn editar">EDITAR</a></td>
										<td align="center"><a href="index.php?link=6&acao=Excluir&id=<?php echo $aula["id_aula"];?>" class="btn excluir">EXCLUIR</a></td>
										
									</tr>
									<?php $i++;}?>
									
								</tbody>
							</table>
							<div class="limpar"></div>
							<div class="base-pag">
								<center><?php echo mostraPaginacao("index.php?link=2$complemento", $ordem, $lpp, $total);?></center>
						
							</div>
					
						<?php }?>
					</div>
				</div>
				
			