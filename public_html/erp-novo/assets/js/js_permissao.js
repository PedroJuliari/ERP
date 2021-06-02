 
 function inserirPermissao(id_usuario, id_tabela, id_acao, id_tabela_acao){
	var marcado =$("#acao"+id_tabela_acao).is(":checked");
	if(marcado==true){
		url = base_url+"permissao/inserir";
	}else{
		url = base_url+"permissao/excluir";
	}
	$.ajax({url:url,
	type:"Post",
	dataType:"json",
	data:{
		id_usuario :id_usuario,
		id_tabela  :id_tabela,
		id_acao    :id_acao
	},
	success: function(data){
		console.log(data);
	}
	
	})
}