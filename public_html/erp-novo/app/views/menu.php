<nav class="menuprincipal">					
    <ul class="menu-ul">
        <li><a href="<?php echo URL_BASE ?>"><i class="fa fa-fw fa-home"></i> Home</a></li>
		<div class="modulos">	
			<div class="item">
			<li class="cat"><a href=""><i class="far fa-fw fa-file"></i> Cadastros </a></li>
                    <div>
                    <input type="checkbox" id="m_cad1" name="cadastro">
                    <label for="m_cad1">Categoria</label>
                    <ul class="sub">
                        <li><a href="<?php echo URL_BASE ."categoria" ?>"> Listar todos</a></li>
                        <li><a href="<?php echo URL_BASE ."categoria/create" ?>"> Cadastrar Novo</a></li>
                    </ul>
                 </div>    
                <div>    
                    <input type="checkbox" id="m_cad2" name="cadastro">
                    <label for="m_cad2">Unidade</label>
                    <ul class="sub">
                            <li><a href="<?php echo URL_BASE ."unidade" ?>"> Listar todos</a></li>
                            <li><a href="<?php echo URL_BASE ."unidade/create" ?>"> Cadastrar Novo</a></li>
                    </ul>
                </div> 
		
				
                <div>  
                    <input type="checkbox" id="m_cad3" name="cadastro">
                    <label for="m_cad3">Produto</label>
                    <ul class="sub">
                        <li><a href="<?php echo URL_BASE ."produto" ?>"> Listar todos</a></li>
                        <li><a href="<?php echo URL_BASE ."produto/create" ?>"> Cadastrar Novo</a></li>
                    </ul>
                 </div>
				 <div>  
                    <input type="checkbox" id="m_estado" name="cadastro">
                    <label for="m_estado">Estado</label>
                    <ul class="sub">
                        <li><a href="<?php echo URL_BASE ."estado" ?>"> Listar todos</a></li>
                    </ul>
                 </div>
				 
				 <div>  
                    <input type="checkbox" id="m_cidade" name="cadastro">
                    <label for="m_cidade">Cidade</label>
                    <ul class="sub">
                        <li><a href="<?php echo URL_BASE ."cidade" ?>"> Listar todos</a></li>
                    </ul>
                 </div>
				 
                <div>  
                    <input type="checkbox" id="m_contato" name="cadastro">
                    <label for="m_contato">Contato</label>
                    <ul class="sub">
                        <li><a href="<?php echo URL_BASE ."contato" ?>"> Listar todos</a></li>
                        <li><a href="<?php echo URL_BASE ."contato/create" ?>"> Cadastrar Novo</a></li>
                    </ul>
                 </div>                 
                <div>  
                    <input type="checkbox" id="m_usuario" name="usuario">
                    <label for="m_usuario">Usuario</label>
                    <ul class="sub">
                        <li><a href="<?php echo URL_BASE ."usuario" ?>">Usuários</a></li>
                        <li><a href="<?php echo URL_BASE ."tabela" ?>">Tabelas</a></li>
                        <li><a href="<?php echo URL_BASE ."acao" ?>">Ações</a></li>
                    </ul>
                 </div>
                 <div>  
                    <input type="checkbox" id="m_diversos" name="cadastro">
                    <label for="m_diversos">Diversos</label>
                    <ul class="sub">
                        <li><a href="<?php echo URL_BASE ."tipomovimento" ?>"> Tipo de Movimento</a></li>
                        <li><a href="<?php echo URL_BASE ."status_entrega" ?>"> Status Entrega</a></li>
                        <li><a href="<?php echo URL_BASE ."status_cotacao" ?>"> Status Cotação</a></li>
                        <li><a href="<?php echo URL_BASE ."status_cotacao" ?>"> Status Cotação</a></li>
                        <li><a href="<?php echo URL_BASE ."status_item_cotacao" ?>"> Status Item Cotação</a></li>
                        <li><a href="<?php echo URL_BASE ."status_ordem_compra" ?>"> Status Ordem Compra</a></li>
                        <li><a href="<?php echo URL_BASE ."status_ordem_producao" ?>"> Status Ordem Produção</a></li>
                        <li><a href="<?php echo URL_BASE ."status_pedido" ?>"> Status Pedido</a></li>
                        <li><a href="<?php echo URL_BASE ."status_pedido" ?>"> Status Pedido</a></li>
                    </ul>
                 </div> 
				
				
            </div>
        </div>
    <div class="modulos">	
        <div class="item">	
            <li class="cat"><a href=""><i class="fas fa-file-invoice-dollar"></i> COMPRAS</a></li>
        <div>				
            <div>                  
                <li><a href="<?php echo URL_BASE ."solicitacao" ?>"> Solicitação</a></li>
                <li><a href="<?php echo URL_BASE ."cotacao" ?>"> Cotação</a></li>
                <li><a href="<?php echo URL_BASE ."ordemcompra" ?>">Ordem de Compra</a></li>                
            </div>

        </div>
        </div>
    </div>
        
    <div class="modulos">	
           <div class="item">	
           <li class="cat"><a href=""><i class="fas fa-file-invoice-dollar"></i> ESTOQUE</a></li>
       <div>
           
                <li class="text-left text-azul p-2 text-uppercase h6 mb-0"><b>Entradas</b></li>					
           <div>                  
                <li><a href="<?php echo URL_BASE ."entradaavulsa" ?>"> Entradas Avulsas</a></li>

           </div>
           <li class="text-left text-azul p-2 text-uppercase h6 mb-0"><b>Saídas</b></li>					
           <div>                  
                <li><a href="<?php echo URL_BASE ."pedido" ?>"> Todas os Pedidos</a></li>								
                <li><a href="<?php echo URL_BASE ."pedido" ?>"> Pedidos Pendentes</a></li>								
                <li><a href="<?php echo URL_BASE ."pedido" ?>"> Pedidos em Produção</a></li>								
                <li><a href="<?php echo URL_BASE ."pedido" ?>"> Pedidos da Loja</a></li>

           </div>
                 
            <li class="text-left text-azul p-2 text-uppercase h6 mb-0"><b>Movimentações</b></li>					
           <div>
               <li><a href="<?php echo URL_BASE ."historico" ?>"> Histórico de Movimentos</a></li>
               <li><a href="<?php echo URL_BASE ."historico/extrato" ?>"> Extrato do Produto</a></li>

           </div>
      </div>
   </div>
   </div>
		
    <div class="modulos">	
        <div class="item">	
           <li class="cat"><a href=""><i class="fas fa-file-invoice-dollar"></i> PRODUÇÃO</a></li>            
        <div>					
            <div>
                <li><a href="<?php echo URL_BASE ."processoprodutivo" ?>"> Processo Produtivo</a></li>               
                <li><a href="<?php echo URL_BASE ."insumo" ?>"> Insumos</a></li>                               
                <li><a href="<?php echo URL_BASE ."ordemproducao" ?>"> Ordem de Produção</a></li>               
            </div>
        </div>

        </div>
    </div>		
		
        <div class="modulos">	
	<div class="item">	
            <li class="cat"><a href=""><i class="fas fa-hand-holding-usd"></i> Financeiro/Contábil</a></li>            
            <div>
                <li class="text-left text-azul p-2 text-uppercase h6 mb-0"><b>Financeiro</b></li>
		<div> 
                    <li><a href="<?php echo URL_BASE ."financeiro/listaordemcompra" ?>">Ordem de Compra</a></li>                
                    <li><a href="<?php echo URL_BASE ."notafiscal" ?>">Nota Fiscal</a></li>                
                    <li><a href="<?php echo URL_BASE ."contareceber" ?>"> Contas a Receber</a></li>                
                    <li><a href="<?php echo URL_BASE ."contapagar" ?>">Conta a Pagar</a></li>                   
                    <li><a href="<?php echo URL_BASE ."despesa" ?>">Despesas</a></li>                                         
                </div>  
                 <li class="text-left text-azul p-2 text-uppercase h6 mb-0"><b>Contábil</b></li>
                 <div> 
                    <li><a href="<?php echo URL_BASE ."planoconta" ?>"> Plano de Contas</a></li>
                    <li><a href="<?php echo URL_BASE ."caixafluxo" ?>">Fluxo de Caixa</a></li>                
                    <li><a href="<?php echo URL_BASE ."livrodiario" ?>"> Livro Diário</a></li>
                                   
                </div>
            </div>
            
            
        </div>
		
         
	<div class="modulos">	
            <div class="item">	
                <li class="cat"><a href=""> </a></li>

            </div>
        </div>	 
        
      </ul>
</nav>