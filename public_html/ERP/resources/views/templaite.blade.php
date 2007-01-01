<!DOCTYPE html>
<html lang="pt-br">
	<head>

	<script type="text/javascript">
$('#deletar').modal('hide');
</script>

		<title>Sistema ERP</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale =1">		
		<!--css-->
		<link rel="stylesheet" href="{{url('../bootstrap/bootstrap/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{url('../resources/demos/style.css')}}">
		<link rel="stylesheet" href="{{url('../resources/js/datatables/css/jquery.dataTables.min.css')}}">
		<link rel="stylesheet" href="{{url('../resources/js/datatables/css/responsive.dataTables.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('../resources/css/DataTables_boot.css')}}">
		<link rel="stylesheet" href="{{url('../resources/css/auxiliar.css')}}">
		<link rel="stylesheet" href="{{url('../resources/css/grade.css')}}">
		<link rel="stylesheet" href="{{url('../resources/css/style.css')}}">
		<!--font icones-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	</head>
	
<body>

@include('cabecalho')

@include('menu')
<div class="rows mx-0">

@yield('conteudo')


</div>




    <script src="{{url('../resources/js/bootstrap.js')}}"></script>	
    <script src="{{url('../resources/js/delet.js')}}"></script>	
	<script src="{{url('../resources/js/jquery.min.js')}}"></script>
	<script src="{{url('../resources/js/tinymce/tinymce.min.js')}}"></script>
	<script src="{{url('../resources/js/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{url('../resources/js/jquery.form.js')}}"></script>
	<script src="{{url('../resources/js/jquery.mask.js')}}"></script>
	<script src="{{url('../resources/js/js.js')}}"></script>
	
	
	<!-- Graphs -->
    <script src="{{url('../resources/js/chart.js/Chart.min.js')}}"></script>
	<script src="{{url('../resources/js/funcao.js')}}"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
<!-- JavaScript Bundle with Popper -->
<script src="{{url('../bootstrap/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 <script>
	  $( function() {
		$( "#tab" ).tabs();
	  } );
  </script>


</body>
	
</html>