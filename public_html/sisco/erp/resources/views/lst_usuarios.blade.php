
@extends('templaite')
@section('conteudo')
<?php 

if(!isset($id2)){$id2="";}?>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
  <button type="button" class="btn btn-secondary btn-lg"data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastrar Usuario</button>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>


<table id="datatable"class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Fone</th>
      <th scope="col">Açoes</th>
    </tr>
  </thead>
  <tbody>
  @foreach($dados as $dado)
    <tr>
      <th scope="row">{{$dado->id}}</th>
      <td>{{$dado->nome}}</td>
      <td>{{$dado->celular}}</td>
      <td><div class="btn-group" role="group" aria-label="Basic example">
       <a href="{{route('editar',$dado->id)}}" type="button" class="btn btn-primary edit" data-bs-whatever="{{$dado->id}}"
       data-bs-whatevernome="{{$dado->nome}}" data-bs-whatevercel="{{$dado->celular}}"data-bs-whateveremail="{{$dado->email}}"
       data-bs-whateverativo="{{$dado->ativo}}"data-bs-whateversenha="{{$dado->senha}}"
       data-bs-whateverid="{{$dado->id}}">Editar</a>
      <!-- <a href="{{route('editar',$dado->id)}}"class ="btn btn-success" id="edita" >Editar</a>-->
       
</div>
<div class="btn-group" role="group" aria-label="Basic example">
  <a href="{{url("usuarios/$dado->id")}}" type="button" class="btn btn-secondary" data-bs-whatever="{{$dado->id}}">Excluir</a>

</div>
<div class="btn-group" role="group" aria-label="Basic example">
<button type="button" class="btn btn-danger">Permissão</button>
</div>

</td>
    </tr>
    @endforeach

<!--MODAL-->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar  {{@$id2->id}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{url('usuarios',@$id2->id)}}"class="form-control" method="POST">
      @csrf
      @method('PUT')
     
      <div class="row g-2">
  <div class="col-md">
    <div class="form-floating">
      <input type="email" class="form-control" value="{{@$id2->email}}"name="email"required="">
      <label for="floatingInputGrid">Email </label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
      <select class="form-control" name="ativo" id="floatingSelectGrid" aria-label="Floating label select example"required="">
     
        <option value="value="{{@$id2->ativo}}""></option>
        <option value="S">S</option>
        <option value="N">N</option>
      </select>
      <label for="floatingSelectGrid">STATUS</label>
    </div>
  </div>
</div>

<div class="row">

<div class="row g-2">
  <div class="col-md">
    <div class="form-floating">
    <input type="text"value="{{@$id2->nome}}" name="nome"class="form-control " id="fnome"required="" >
      <label for="floatingInputGrid">Nome </label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
    <input type="text"value="{{@$id2->celular}}" name="celular"class="form-control "required="" >
      <label for="floatingSelectGrid">Celular</label>
    </div>
  </div>
</div>
 
   </div> 
   <div class="row"> 
<div class="row g-2">
  <div class="col-md">
    <div class="form-floating">
    <input type="text"value="{{@$id2->data_cadastro}}" name="data_cadastro"class="form-control" id="recipient-name"required="">
    <label for="floatingInputGrid">Data Cadastro </label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
    <input type="password" value="{{@$id2->senha}}"name="senha"class="form-control" id="fsenha"required="">
         
      <label for="floatingSelectGrid">Senha</label>
    </div>
  </div>
</div>
</div>
         
          <div class="mb-3 senha">
           
            
          </div>
        
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <button type="submit" class="btn btn-primary">Editar</button>
        </form>
      </div>
    </div>
  </div>
</div>

       
        @endsection
        
        <script src="{{url('../resources/js/bootstrap.min.js')}}"></script>
        <script src="https://code.jquery.com/jquery.js"></script>
      <?php
    if(@$id2 !=""){
echo"<script>
$(function(){
$('#myModal').modal('show');
});
</script>";
    }
?> 

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastra Usuarios</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

<form class="form-group row">

<div class="col">
<label for="exampleFormControlInput1"  class="form-label">nome</label>
<input type="text"name="nome" class="form-control"required="">
  </div>
  <div class="col">
  <label for="exampleFormControlInput1" class="form-label">E-mail</label>
  <input type="email" name="email"class="form-control"required="">
  </div>
  
  
  <div class="col">
<label for="exampleFormControlInput1" class="form-label">Status</label>
<select class="form-control" name="ativo" id="floatingSelectGrid" aria-label="Floating label select example"required="">
     
<label for="floatingSelectGrid">STATUS</label>
        <option value="S">S</option>
        <option value="N">N</option>
      </select>

  </div>
  <div class="row"></div>
  <div class="col">
  <label for="exampleFormControlInput1" class="form-label">Celular</label>
  <input type="text"name="celular" class="form-control"required="">
  </div>
  
  <div class="col">
<label for="exampleFormControlInput1" class="form-label">Data de cadastro</label>
<input type="text"value="//" name="data_cadastro"class="form-control"required="">
  </div>
  <div class="col">
  <label for="exampleFormControlInput1" class="form-label">Senha</label>
  <input type="password"name="senha" class="form-control"required="">
  </div>
 
</form>
         
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
