
@extends('templaite')
@section('conteudo')

<button class="btn btn-primary" id="btn-mensagem">Exibir modal via JavaScript</button>


<div class="modal fade" id="modal-mensagem">
   <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                <h4 class="modal-title">Título da mensagem</h4>
            </div>
            <div class="modal-body">
                <p>Conteúdo da mensagem</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
		
	
  

	





@endsection