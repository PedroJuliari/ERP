@extends('templaite')
@section('conteudo')
<div class="col-9 central mb-3">
<span class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco"><i class="fas fa-plus-circle"></i> @if(isset($edita))Editar @else Cadastrar contato  @endif</span>
@if(isset($edita))
<form action="{{url("funcionario/$edita->id")}}" method="Post">
@method('PUT')
 @else 
 <form action="{{url("funcionario/")}}" method="Post">

@endif                    
   <div id="tab">
	  <div id="tab-1">
		<div class="p-2">
				<span class="d-block mt-4 mb-4 h4 border-bottom text-uppercase">Cadastro Funcionario</span>
				<div class="rows">										
					@csrf
					

				<div class="col-6 mb-3">
						<label class="text-label">Nome</label>	
						<input type="text" name="nome" value="{{$edita->nome ??''}}" placeholder="Digite aqui..." class="form-campo"required="">
				</div>  
                <div class="col-6 mb-3">
						<label class="text-label">Cargo</label>	
						<input type="text" name="cargo" value="{{$edita->cargo ??''}}" placeholder="Digite aqui..." class="form-campo"required="">
				</div> 
                <div class="col-6 mb-3">
						<label class="text-label">CPF</label>	
						<input type="text" name="cpf" value="{{$edita->cpf ??''}}" placeholder="Digite aqui..." class="form-campo"required="">
				</div>                                   
		
			
				<div class="col-6 mb-3">
						<label class="text-label">Data Registro</label>	
						<input type="date" name="data_registro" value="{{$edita->data_cadastro ??''}}" placeholder="Digite aqui..." class="form-campo"required="">
				</div>	
                <div class="col-6 mb-3">
						<label class="text-label">Fone</label>	
						<input type="text" name="fone" value="{{$edita->fone ??''}}" placeholder="Digite aqui..." class="form-campo"required="">
				</div> 
				
				<div class="col-6 mb-3">
					<label class="text-label">Sexo</label>
					<select class="form-campo" name="sexo"required="">
					<option value="{{$edita->sexo ??''}}">{{$edita->sexo ??''}}</option> 
						    <option value="M">Masculino</option>                                            
							<option value="F">Feminino</option> 
					</select>
				</div>

				<div class="col-6 mb-3">
						<label class="text-label">E-mail</label>	
						<input type="text" name="email" value="{{$edita->email ??''}}" placeholder="Digite aqui..." class="form-campo"required="">
				</div>
                <div class="col-6 mb-3">
						<label class="text-label">Celular</label>	
						<input type="text" name="celular" value="{{$edita->celular ??''}}" placeholder="Digite aqui..." class="form-campo"required="">
				</div> 
                <div class="col-6 mb-3">
						<label class="text-label">Rua</label>	
						<input type="text" name="endereco" value="{{$edita->endereco ??''}}" placeholder="Digite aqui..." class="form-campo"required="">
				</div> 
                <div class="col-6 mb-3">
						<label class="text-label">Numero</label>	
						<input type="text" name="numero" value="{{$edita->numero ??''}}" placeholder="Digite aqui..." class="form-campo"required="">
				</div> 
                <div class="col-6 mb-3">
						<label class="text-label">Cidade</label>	
						<input type="text" name="cidade" value="{{$edita->cidade ??''}}" placeholder="Digite aqui..." class="form-campo"required="">
				</div> 
                <div class="col-6 mb-3">
						<label class="text-label">Bairro</label>	
						<input type="text" name="bairro" value="{{$edita->bairro ??''}}" placeholder="Digite aqui..." class="form-campo"required="">
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