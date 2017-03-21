$(document).ready(function(){
    $('#dataTable').DataTable({
      responsive: true
    });

});


function loadRegister(value){
  $("#carpa").val(value);
  $("#seleccionar_carpa").trigger("click");
}


function enviarEmail(value){
  $("#usuario_email").val(value);
}
