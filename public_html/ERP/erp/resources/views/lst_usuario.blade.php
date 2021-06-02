@extends('templaite')
@section('conteudo')
<div class="col-9 central mb-3">
<div class="rows">	
                <div class="col-12">
                <div class="caixa">
                   <div class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco d-flex justify-content-space-between">
						<span class="d-flex center-middle"><i class="far fa-list-alt mr-1"></i> Lista de Usuário </span>
						<div>
							<a href="{{url("usuarios/create")}}" class="btn btn-verde mx-1 d-inline-block"><i class="fas fa-plus-circle"></i> Adicionar novo</a>
							<a href="" class="btn btn-laranja filtro mx-1 d-inline-block"><i class="fas fa-filter"></i> Filtrar</a>
						</div>
                   </div>     
					<form name="busca" action="" method="GET">
                        
                        <div class="px-2 pt-2">	
							  <div class="mostraFiltro bg-padrao mt-2 p-2 radius-4">
							  <div class="rows">
                                        <div class="col-10">	
                                                <label class="text-label d-block text-branco">Nome</label>
                                                <input type="text" name="categoria" value="" class="form-campo">
                                        </div>
                                        <div class="col-2 mt-1 pt-1">
                                                <input type="submit" value="Pesquisar" class="btn btn-roxo text-uppercase">
                                        </div>
                                </div>
                                </div>
                        </div>
                    </form>
                </div>
                </div>

		<div class="col-12">
            <div class="px-2">
                    <div class="tabela-responsiva pb-4">
                    @csrf
                    <table cellpadding="0" cellspacing="0" id="dataTable" width="100%">
                  
                            <thead>
                                    <tr>
                                       <th align="center">Nome</th>
                                       <th align="left">Email</th>
                                       <th align="center">celular</th>
                                       <th align="center">Ativo</th>
                                       <th align="center" width="70">Editar</th>
                                       <th align="center" width="70">Excluir</th>
                                       <th align="center" width="100">Permissão</th>
                                    </tr>
                            </thead>
                            <tbody>   
                            @foreach($lista as $ls)                                   
                             <tr>
                                <td align="center">{{$ls->nome}}</td>
                                <td align="left">{{$ls->email}}</td>
								<td align="center">{{$ls->celular}}</td>
								<td align="center">{{$ls->ativo}}</td>                                											
                                <td align="center"><a href="{{"usuarios/$ls->id/edit"}}" class=""><i class="fas fa-edit"></i> Editar</a></td>                                   											
                                <td align="center"><a href="{{"usuarios/$ls->id"}}" class="js-del"><i class="fas fa-trash-alt"></i> Excluir</a></td>                                   											
                                <td align="center"><a href="index.php?link=13" class=""><i class="fas fa-edit"></i> Permissões</a></td>    
                             </tr>                 o
                            @endforeach
                                            						
                        </tbody>
                                </table>
								
                        </div>

                        </div>

                   
                    <!--
                        <div class="caixa p-2">
                                <div class="msg msg-verde">
                                <p><b><i class="fas fa-check"></i> Mensagem de boas vindas</b> Parabéns seu produto foi inserido com sucesso</p>
                                </div>
                                <div class="msg msg-vermelho">
                                <p><b><i class="fas fa-times"></i> Mensagem de Erro</b> Houve um erro</p>
                                </div>
                                <div class="msg msg-amarelo">
                                <p><b><i class="fas fa-exclamation-triangle"></i> Mensagem de aviso</b> Tem um aviso pra você</p>
                                </div>
                        </div>
                     --> 
                </div>

        </div>
</div>

@endsection