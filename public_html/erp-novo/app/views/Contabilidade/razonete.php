<div class="conteudo-dividido bg-fundo pt-3">				
	<div class="conteudo-fluido">	
		<div class="rows">	 	
			<div class="col-12">
				<div class="caixa">
					<div class="caixa-titulo py-1 d-inline-block width-100">
							<span class="h5  mb-0 pt-1 d-inline-block"><i class="far fa-list-alt"></i> Contábil - Razonete </span>
							
					</div>
					<div class="tabela-responsiva rows td-none d-flex">
							<div class="col-4 p-4">
								<table cellpadding="0" cellspacing="0">
								<thead>
									<tr>
										<th align="center" colspan="2"><span class="h5 mb-0"><?php echo $conta->codigo . " - " . $conta->plano_conta ?></span></th>
									</tr>
								</thead>
								<thead>
									<tr>
										<td align="center" class="borderY"><b>DÉBITO</b></td>
										<td align="center" class="borderY"><b>CRÉDITO</b></td>
									</tr>
								</thead>
								<tbody>
									<tr align="top">
										<td class="border-right" style="vertical-align:top">
											<table cellspacing="0" cellpadding="0" class="mb-0">
                                                                                            <?php foreach ($debitos as $debito){ ?>
												<tr>
													<td align="center"><span class="text-azul">R$ <?php echo $debito->valor ?></span></td>
												</tr>
                                                                                            <?php } ?>
											</table>
										</td>
										<td style="vertical-align:top">
											<table cellspacing="0" cellpadding="0" class="mb-0">
                                                                                            <?php foreach ($creditos as $credito){ ?>
												<tr>
													<td align="center"><span class="text-vermelho">R$ <?php echo $credito->valor ?></span></td>
												</tr>
                                                                                            <?php } ?>
												
											</table>
										</td>
									</tr>
									
									<tr>
										<td align="center" class="border-top">R$ <?php echo $soma_debito->soma ?></td>
										<td align="center" class="border-top">R$ <?php echo $soma_credito->soma ?></td>
									</tr>
								
								<tr>
									<td colspan="2" class="tborder1 p-0">
										<table cellspacing="0" cellpadding="0" class="mb-0">
											<tr>
												<td align="center" colspan="2">
													<span class="float-left">SALDO</span>
													<span class="float-right">R$ <?php echo $saldo ?></span>
												</td>
											</tr>
											<tr>
												<td align="center" colspan="2" class="border-top">
													<small class="float-left">NATUREZA DO SALDO</small>
													<span class="float-right bg-vermelho px-1"><?php echo $resultado ?></span>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								</tbody>
								</table>
							</div>
					</div>
				</div>
			</div>
			
			</div>
	</div>
</div>

<div class="window sm-modal" id="contamodal">
<div class="caixa mb-0">
<div class="caixa-titulo">Nível - 4 <span class="fechar">x</span></div>
<div class="p-4">
	<form action="" method="">
		<div class="rows">
			<div class="col-3 mb-3">
				<span class="text-label">Código</span>
				<input type="text" class="form-campo">
			</div>
			<div class="col-9 mb-3">
				<span class="text-label">Tipo</span>
				<input type="text" value="Ativo" class="form-campo">
			</div>
			<div class="col-3 mb-3">
				<span class="text-label">Código</span>
				<input type="text" class="form-campo">
			</div>
			<div class="col-9 mb-3">
				<span class="text-label">Conta sintética</span>
				<input type="text" value="Ativo" class="form-campo">
			</div>
		
			<div class="col-3 mb-3">
				<span class="text-label">Código</span>
				<input type="text" class="form-campo">
			</div>
			<div class="col-9 mb-3">
				<span class="text-label">Conta master</span>
				<input type="text" value="Ativo" class="form-campo">
			</div>
			<div class="col-3 mb-3">
				<span class="text-label">Código</span>
				<input type="text" class="form-campo">
			</div>
			<div class="col-9 mb-3">
				<span class="text-label">Conta</span>
				<input type="text" value="Ativo" class="form-campo">
			</div>
		</div>
		</div>
	<footer class="caixa-rodape py-1">
		<input type="submit" class="btn btn-azul d-table m-auto" value="Inserir">
	</footer>
	</form>
</div>
</div>
	
</div>

<div id="mascara"></div>