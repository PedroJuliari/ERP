<?php
@$ordem = $_GET["ordem"]?$_GET["ordem"]:0;
@$pesq = $_GET["pesq"]?$_GET["pesq"]:"";
@$campo = $_GET["campo"]?$_GET["campo"]:"";

?>
				<h2>CLIENTE</h2>
				<div class="base-lista">
					<table>
						<tbody>
							<form action="index.php" method="get" name="buscarusuario" id="buscarusuario">
								<tr>
									<th width="16%"><strong>Buscar:</strong></th>
									<th width="60%"><input type="text" name="pesq" value="<?php echo $pesq?>"></th>
									<th width="16%">
										<select name="campo">
											<option value="nome">Nome</option>
											<option value="email">E-mail</option>
											
										</select>
									</th>
									
									<input type="hidden" name="link" value="2"/>
									
									
									<th><input type="submit" name="Submit"value="" class="but"></th>
								</tr>
							</form>
						</tbody>
					</table>
					<div class="cx-lista">
						<h1>LISTA DE CLIENTES</h1>
						
							<a href="index.php?link=3" class="btn">CADASTRAR CLIENTE</a>
							<p class="limpar separa"></p>
							
							<?php 
							
							
							if($pesq!=""){
								
							$sql1="SELECT id_cliente FROM cliente WHERE $campo LIKE'%$pesq%'";	
							$sql2="SELECT * FROM cliente WHERE $campo LIKE'%$pesq%'";
							$complemento="&pesq=$pesq&campo=$campo";
							
							}else{
								
							$sql1 ="Select id_cliente from cliente";	
							$sql2 ="Select * from cliente";	
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
										<td align="left" class="tdtt" width="26%">Nome</td>
										<td align="left" class="tdtt"  width="26%">Email</td>
										<td colspan="3" align="center" class="tdtt">Ação</td>
									</tr>
									
									
									<?php 
									$lpp =10;
									$inicio = $ordem *$lpp;
								
						
									
									$clientes = selecionar("$sql2 LIMIT $inicio,$lpp");
									$i=0;
									
									foreach($clientes as $cliente){
										if ($i%2==0)
											$col="linha1";
										else
											$col="linha2";
									?>
									<tr class="<?php echo $col;?>">
										<td align="left"><?php echo $cliente["id_cliente"];?></td>
										<td align="left"><?php echo $cliente["nome"];?></td>
										<td align="left"><?php echo $cliente["email"];?></td>
										<td align="center"><a href="index.php?link=3&acao=Editar&id=<?php echo $cliente["id_cliente"];?>" class="btn editar">EDITAR</a></td>
										<td align="center"><a href="index.php?link=3&acao=Excluir&id=<?php echo $cliente["id_cliente"];?>" class="btn excluir">EXCLUIR</a></td>
										<td align="center"><a href="frm-cliente.html" class="btn editar">MATRICULAR</a></td>
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
				
				
		