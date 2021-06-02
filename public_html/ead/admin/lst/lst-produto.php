<?php
@$ordem = $_GET["ordem"]?$_GET["ordem"]:0;
@$pesq = $_GET["pesq"]?$_GET["pesq"]:"";
@$campo = $_GET["campo"]?$_GET["campo"]:"";

?>
				<h2>PRODUTOS</h2>
				<div class="base-lista">
					<table>
						<tbody>
							<form action="index.php" method="get" name="buscarusuario" id="buscarusuario">
								<tr>
									<th width="16%"><strong>Buscar:</strong></th>
									<th width="60%"><input type="text" name="pesq" value="<?php echo $pesq?>"></th>
									<th width="16%">
										<select name="campo">
											<option value="produto">Produto</option>
										
										</select>
									</th>
									
									<input type="hidden" name="link" value="7"/>
									
									
									<th><input type="submit" name="Submit"value="" class="but"></th>
								</tr>
								</form>
						</tbody>
					</table>
					<div class="cx-lista">
						<h1>LISTA DE PRODUTOS</h1>

							<a href="index.php?link=13" class="btn">CADASTRAR PRODUTO</a>
							<p class="limpar separa"></p>
							
							<?php 
							
							
							if($pesq!=""){
								
							$sql1="SELECT id_produto FROM produto WHERE $campo LIKE'%$pesq%'";	
							$sql2="SELECT * FROM produto WHERE $campo LIKE'%$pesq%'";
							$complemento="&pesq=$pesq&campo=$campo";
							
							}else{
								
							$sql1 ="Select id_produto from produto";	
							$sql2 ="Select * from produto";	
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
										<td align="left" class="tdtt" width="56%">Titulo do produto</td>										
										<td align="center" class="tdtt">Ativo</td>
										<td colspan="2" align="center" class="tdtt">Alteração</td>
									
									</tr>
							
									
										<?php 
									$lpp =10;
									$inicio = $ordem *$lpp;
								
						
									
									$produtos = selecionar("$sql2 LIMIT $inicio,$lpp");
									$i=0;
									
									foreach($produtos as $produto){
										if ($i%2==0)
											$col="linha1";
										else
											$col="linha2";
									
									?>
									<tr class="<?php echo $col;?>">
										<td align="left"><?php echo $produto["id_produto"];?></td>
										<td align="left"><?php echo $produto["produto"];?></td>
										<td align="left"><?php echo $produto["ativo"];?></td>
										<td align="center"><a href="index.php?link=13&acao=Editar&id=<?php echo $produto["id_produto"];?>" class="btn editar">EDITAR</a></td>
										<td align="center"><a href="index.php?link=13&acao=Excluir&id=<?php echo $produto["id_produto"];?>" class="btn excluir">EXCLUIR</a></td>
										
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
				
			