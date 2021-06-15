/*!
* Start Bootstrap - Simple Sidebar v6.0.1 (https://startbootstrap.com/template/simple-sidebar)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-simple-sidebar/blob/master/LICENSE)
*/
// 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

/*
$(document).ready(function(){
 //   var table=$('#datatable').DataTable();
  
    table.on('click','.edit',function(){
      $tr =$this.closest('tr');
      if($($tr).hasClass('child')){
        $tr=$tr.prev('.parent');
        
      }
      var data=table.row($tr).data();
      console.log(data);
      $('#fid').val(data[1]);
      $('#fnome').val(data[2]);
      $('#lemail').val(data[3]);
      $('#fsenha').val(data[4]);
      $('#celular').val(data[5]);
      $('#fativo').val(data[6]);
  
      $('#FormEdita').attr('action','/usuarios'+data[0]);
      $('#aaaaaaaaaaaa/editaModal').modal('show');
    })
  })
  
  */
  
