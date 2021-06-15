//DADOS DO USUARIO...
var exampleModal = document.getElementById('myModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  var recipientnome = button.getAttribute('data-bs-whatevernome')
  var recipientcel = button.getAttribute('data-bs-whatevercel')
  var recipientemail = button.getAttribute('data-bs-whateveremail')
  var recipientativo = button.getAttribute('data-bs-whateverativo')
  var recipientsenha = button.getAttribute('data-bs-whateversenha')
  var recipientid = button.getAttribute('data-bs-whateverid')
  
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
 // var modalTitle = exampleModal.querySelector('.id input')
  var modalBodyInput = exampleModal.querySelector('.nome input ')
  var modalBodyInput2 = exampleModal.querySelector('.cel input')
  var modalBodyInput3 = exampleModal.querySelector('.email input')
  var modalBodyInput4 = exampleModal.querySelector('.ativo input')
  var modalBodyInput5 = exampleModal.querySelector('.senha input')
  var modalBodyInput6 = exampleModal.querySelector('.id input')

  modalTitle.textContent = 'Editar ' + recipient
  modalBodyInput.value = recipientnome
  modalBodyInput2.value = recipientcel
  modalBodyInput3.value = recipientemail
  modalBodyInput4.value = recipientativo
  modalBodyInput5.value = recipientsenha
  modalBodyInput6.value = recipientid

})



