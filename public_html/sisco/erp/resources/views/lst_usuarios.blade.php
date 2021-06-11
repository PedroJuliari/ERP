
@extends('templaite')
@section('conteudo')


<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
  <button type="button" class="btn btn-secondary btn-lg">Cadastrar Usuario</button>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>


<table class="table">
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
      <a href="{{route('editar',$dado->id)}}" type="button" class="btn btn-primary" data-bs-whatever="{{$dado->id}}"
       data-bs-whatevernome="{{$dado->nome}}" data-bs-whatevercel="{{$dado->celular}}"data-bs-whateveremail="{{$dado->email}}"
       data-bs-whateverativo="{{$dado->ativo}}"data-bs-whateversenha="{{$dado->senha}}"
       data-bs-whateverid="{{$dado->id}}">Editar</a>
       
</div>
<div class="btn-group" role="group" aria-label="Basic example">
  <a href="{{url("usuarios/$dado->id")}}" type="button" class="btn btn-secondary">Excluir</a>

</div>
<div class="btn-group" role="group" aria-label="Basic example">
<button type="button" class="btn btn-danger">Permissão</button>
</div>

</td>
    </tr>
    @endforeach
<!--MODAL-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action=""class="form-control" method="POST">
      @method('PUT')

          <div class="mb-3 nome" >
            <label for="" class="col-form-label">Nome:</label>
            <input type="text" name="nome"class="form-control " id="" >
          </div>
          <div class="mb-3 cel">
            <label for="" class="col-form-label">Celular:</label>
            <input type="text"name="celular" class="form-control " id="">
          </div>
          <div class="mb-3 email">
            <label for="" class="col-form-label">E-Mail:</label>
            <input type="text"name="email" class="form-control " id="">
          </div>
          <div class="mb-3 ativo">
            <label for="" class="col-form-label">Ativo:</label>
            <input type="text"name="ativo" class="form-control " id="">
          </div>
          <div class="mb-3 senha">
            <label for=""name="senha" class="col-form-label">Senha:</label>
            <input type="text" class="form-control" id="">
          </div>
          <div class="mb-3 id">
          <input  type="hidden"name="id"class="form-control id modal-title" id="modal-title">
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
<?php
if(@$dados !=""){
  //echo"<script>$('#exampleModal').modal('show');</script>";
  echo 'ola';
  
  }
?>

       
        @endsection
