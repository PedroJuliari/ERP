
@extends('templaite')
@section('conteudo')
<div class="col-9 central mb-3">
<span class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco"><i class="fas fa-plus-circle"></i> @if(isset($edita))Editar @else Cadastrar categoria  @endif</span>
                        
@if(isset($edita))
<form action="{{url("categoria/$edita->id")}}" method="Post">
@method('PUT')
 @else 
 <form action="{{url("categoria/")}}" method="Post">

@endif 
@csrf
            <div class="col-6 d-block m-auto rows px-5 py-5">
                <div class="col-12 mb-3">
                    <label class="text-label">Categoria</label>	
                    <input type="text" name="categoria" value="{{$edita->categoria ??''}}" class="form-campo" placeholder="Digite o nome da categoria"required="">
                </div>
                <div class="col-12 mb-3">
                        <label class="text-label">Ativo</label>	
                        <select name="ativo_categoria" class="form-campo"required="">
                        <option value="">{{$edita->ativo_categoria ??''}}</option> 
                            <option value="S">Sim</option>                                                 
                            <option value="N">Não</option>                                                 
                        </select>
                     
                </div>                                    
                <div class="col-12 mt-3 mb-5">
                    <input type="submit" name="" value="@if(isset($edita))Editar @else Cadastrar  @endif"" class="btn btn-laranja d-block m-auto">
                </div>
            </div>
        </form>
</div>
@endsection