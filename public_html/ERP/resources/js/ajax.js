$(document).ready(function(){
    $('#btn-salvar').click(function(event){//pego o id,dispara o evento e a função
        event.preventDefault();//evento pra não deixar fechar a janela modal

        //iniciando o ajax...
        $.ajax({
        url:"",//url ou rota
        method:"",//post get
        data:$('form').serialize(),//dados
        dataType:"text",//tipo de dado
        success: function(mensagem){
            $('#mensagem').text(mensagem)
        }
    })
    })
})
//passar id para rota
$(document).ready(function () {
    fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ url('live_search.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  });
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
 });