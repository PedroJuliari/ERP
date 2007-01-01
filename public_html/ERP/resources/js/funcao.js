 $( function() {
    $( "#accordion" ).accordion({
		collapsible: true,
		autoHeight: false,
		active: false,
		heightStyle: "content" 
    });
	
	$('.filtro').click (function(){
	$('.mostraFiltro').slideToggle();
	$(this).toggleClass('active');
		return false;
	});
	
	$('.mobmenu').click (function(){
	$('.menu-lateral').slideToggle();
	$(this).toggleClass('active');
		return false;
	});
	
	// modal 
	$("a[rel=modal]").click( function(ev){
        ev.preventDefault();
 
        var id = $(this).attr("href");
 
        var alturaTela = $(document).height();
        var larguraTela = $(window).width();
		
		
			
        //colocando o fundo preto
        $('#mascara').css({'width':larguraTela,'height':alturaTela});
        //$('#mascara').fadeIn(500); 
        $('#mascara').fadeTo("slow",0.8);
 
        var left = ($(window).width() /2) - ( $(id).width() / 2 );
        var top = ($(window).height() / 2) - ( $(id).height() / 2 );
     
        $(id).css({'top':top,'left':left});
        $(id).show(); 
		$(window).scrollTop(0) ;
		
    });
 
    $("#mascara").click( function(){
        $(this).hide();
        $(".window").hide();
    });
 
    $('.fechar').click(function(ev){
        ev.preventDefault();
        $("#mascara").hide();
        $(".window").hide();
    });

 });


//cria os gráficos
 var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Janeiro", "Fervereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 10034],
            lineTension: 0,
            backgroundColor: '#607bd7',
            borderColor: '#607bd7',
            borderWidth: 1,
            pointBackgroundColor: '#607bd7'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
 

      var ctx = document.getElementById("myChart2");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Janeiro", "Fervereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 43489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#E34B7A',
            borderWidth: 4,
            pointBackgroundColor: '#E34B7A'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });