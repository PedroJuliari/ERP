
@extends('templaite')
@section('conteudo')
<div class="col-9 central mb-3">
<span class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco"><i class="fas fa-plus-circle"></i> @if(isset($edita))Editar @else Cadastrar Maquinas  @endif</span>
                        
@if(isset($edita))
<form action="{{url("maquinas/$edita->id")}}" method="Post">
@method('PUT')
 @else 
 <form action="{{url('/maquinas')}}" method="Post">

@endif 
@csrf
            <div class="col-6 d-block m-auto rows px-5 py-5">
                <div class="col-12 mb-3">
                    <label class="text-label">Nome Da Maquina</label>	
                    <input type="text" name="maquina" value="{{$edita->maquina ??''}}" class="form-campo" placeholder="Digite o nome da categoria"required="">
                </div>
                <div class="col-12 mb-3">
                    <label class="text-label">Empresa</label>	
                    <input type="text" name="empresa" value="{{$edita->empresa ??''}}" class="form-campo" placeholder="Digite o nome da categoria"required="">
                </div>
                <div class="col-12 mb-3">
                        <label class="text-label">Ativo</label>	
                        <select name="ativa" class="form-campo"required="">
                        <option value="">{{$edita->ativa ??''}}</option> 
                            <option value="S">Sim</option>                                                 
                            <option value="N">Não</option>                                                 
                        </select>
                        <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Dados da maquina</label>
  <textarea name="dados" class="form-control" id="exampleFormControlTextarea1" rows="3"required="">{{$edita->dados ??''}}</textarea>
  </div>
                     
                </div>                                    
                <div class="col-12 mt-3 mb-5">
                    <input type="submit" name="" value="@if(isset($edita))Editar @else Cadastrar  @endif"" class="btn btn-laranja d-block m-auto">
                </div>
            </div>
        </form>
</div>
@endsection