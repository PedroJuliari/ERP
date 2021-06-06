

@extends('templaite')
@section('conteudo')



<div class="col-9 central mb-3">
<div class="rows">	
                <div class="col-12">
                <div class="caixa">
                   <div class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco d-flex justify-content-space-between">
						<span class="d-flex center-middle"><i class="far fa-list-alt mr-1"></i> Lista de Funcionarios </span>
						<div>
							<a href="{{url("funcionario/create")}}" class="btn btn-verde mx-1 d-inline-block"><i class="fas fa-plus-circle"></i> Adicionar novo</a>
							<a href="" class="btn btn-laranja filtro mx-1 d-inline-block"><i class="fas fa-filter"></i> Filtrar</a>
						</div>
                   </div>     
					<form name="busca" action="{{url('funcionario/search')}}" method="get">
                        @csrf
                        <div class="px-2 pt-2">	
							  <div class="mostraFiltro bg-padrao mt-2 p-2 radius-4">
							  <div class="rows">
                                        <div class="col-10">	
                                                <label class="text-label d-block text-branco">Nome</label>
                                                <input type="text" name="buscar" value="" class="form-campo">
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
                                       <th align="center">Email</th>
                                       <th align="center">celular</th>
                                       <th align="center">Cargo</th>
                                       <th align="center" width="70">Editar</th>
                                       <th align="center" width="70">Excluir</th>
                                    
                                    </tr>
                            </thead>
                            <tbody>  
                            @csrf 
                            @foreach($dados as $dado)                                   
                             <tr>
                                <td align="left">{{$dado->nome}}</td>
                                <td align="left">{{$dado->email}}</td>
                             
								<td align="left">{{$dado->celular}}</td>
								<td align="left">{{$dado->cargo}}</td>  

                                                     											
                                <td align="center"><a href="{{url("funcionario/$dado->id/edit")}}"><i class="fas fa-edit"> Editar</a></td>                                   											
                                <td align="center"><a href="{{url("funcionario/$dado->id")}}" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash-alt"></i>Excluir</a></td>                                   											
                               
                             </tr>  
                             @endforeach      
                           						
                        </tbody>
                                </table>

								
                        </div>

                        </div>
                      
                        <!--<div class="caixa p-2">
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"  id="exampleModalLabel">Excluir</h5>
        @if(isset($dado))
        <form action="{{url("funcionario/$dado->id")}}" method="post">
        @csrf 
        @method('delete')
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Deseja mesmo excluir o usuario? 
       @else 
       
       não pegou...
        
        @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Não</button>
        <button type="submit" class="btn btn-success">>Sim</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->


@endsection
