
@extends('templaite')
@section('conteudo')


<div class="col-9 central mb-3">
<span class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco"><i class="fas fa-plus-circle"></i> @if(isset($edita))Editar @else Cadastrar Processo  @endif</span>
                        
@if(isset($edita))
<form action="{{url("OrServicos/$edita->id")}}" method="Post">
@method('PUT')
 @else 
 <form action="{{url("OrServicos/")}}" method="Post">

@endif  
<div class="col-6 d-block m-auto rows px-5 py-5">
<div class="mb-3">
@csrf
  <label for="exampleFormControlInput1" class="form-label">Nome do processo a ser fabricado</label>
  <input  name="processo_produtivo" type="text" class="form-control"value="{{$edita->processo_produtivo ??''}}" id="exampleFormControlInput1" placeholder=""required="">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
  <textarea name="observacao" class="form-control" id="exampleFormControlTextarea1" rows="3"required="">{{$edita->observacao ??''}}</textarea>
  </div>
                                                  
                <div class="col-12 mt-3 mb-5">
                    <input type="hidden" name="id_categoria" value="">
                    <input type="submit" name="" value="@if(isset($edita))Editar @else Cadastrar  @endif" class="btn btn-laranja d-block m-auto">
                </div>
            </div>
        </form>
</div>
@endsection