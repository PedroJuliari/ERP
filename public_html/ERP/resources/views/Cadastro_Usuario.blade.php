@extends('templaite')
@section('conteudo')
<div class="col-9 central mb-3">
<span class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco"><i class="fas fa-plus-circle"></i> @if(isset($edita))Editar @else Cadastrar contato  @endif</span>
@if(isset($edita))
<form action="{{url("usuarios/$edita->id")}}" method="Post">
@method('PUT')
 @else 
 <form action="{{url("usuarios/")}}" method="Post">

@endif                    
   <div id="tab">
	  <div id="tab-1">
		<div class="p-2">
				<span class="d-block mt-4 mb-4 h4 border-bottom text-uppercase">Informações básicas do usuario</span>
				<div class="rows">										
					@csrf
					

				<div class="col-6 mb-3">
						<label class="text-label">Nome</label>	
						<input type="text" name="nome" value="{{$edita->nome ??''}}" placeholder="Digite aqui..." class="form-campo"required="">
				</div>                                    
		
			
				<div class="col-4 mb-3">
						<label class="text-label">Data Cadastro</label>	
						<input type="date" name="data_cadastro" value="{{$edita->data_cadastro ??''}}" placeholder="Digite aqui..." class="form-campo"required="">
				</div>	

				<div class="col-8 mb-3">
						<label class="text-label">E-mail</label>	
						<input type="text" name="email" value="{{$edita->email ??''}}" placeholder="Digite aqui..." class="form-campo"required="">
				</div>
				<div class="col-4 mb-3">
						<label class="text-label">Senha</label>	
						<input type="password" name="senha" value="{{$edita->senha ??''}}" placeholder="Digite aqui..." class="form-campo"required="">
				</div>

				<div class="col-3 mb-3">
						<label class="text-label">Celular:</label>	
						<input type="text" name="celular" value="{{$edita->celular ??''}}" placeholder="Digite aqui..." class="form-campo"required="">
				</div>
				<div class="col-2">
					<label class="text-label">Ativo</label>
					<select class="form-campo" name="ativo">
					       
						    <option value="S">S</option>                                            
							<option value="N">N</option> 
					</select>
				</div>
				

			</div>
		</div>
	  </div>
	  

	  
      
 </div>
		<div class="col-12 text-center pb-4">
			<input type="submit" value="@if(isset($edita))Editar @else Cadastrar  @endif" class="btn btn-laranja m-auto">
		</div>
	  </div>
	</div>
</form>
</div>

@endsection