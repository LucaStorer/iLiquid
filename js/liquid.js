
//evento che intercetta la finestra modale in modifica per passare i parametri
$('#ModalModCliente').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('idrecord') // Extract info from data-* attributes
  var nome = button.data('nome')
  var riferimento = button.data('riferimento')
  var indirizzo = button.data('indirizzo')
  var email = button.data('email')
  var telefono = button.data('telefono')
  var piva = button.data('piva')
  var tipo = button.data('tipo')
  var categoria = button.data('categoria')
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  //  modal.find('.modal-title').text('New message to ' + recipient)
  //  modal.find('.modal-body input').val(recipient)

  modal.find('input[name="idrecord"]').val(id)
  modal.find('input[name="nome"]').val(nome)
  modal.find('input[name="riferimento"]').val(riferimento)
  modal.find('input[name="indirizzo"]').val(indirizzo)
  modal.find('input[name="email"]').val(email)
  modal.find('input[name="telefono"]').val(telefono)
  modal.find('input[name="piva"]').val(piva)
  modal.find('select[name="tipo"]').val(tipo)
  modal.find('select[name="categoria"]').val(categoria)
});
