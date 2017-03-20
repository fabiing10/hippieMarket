$(document).ready(function(){
    $('#dataTable').DataTable({
      responsive: true
    });
});


function loadRegister(value){
  console.log(value)

  $("#carpa").val(value);
  $("#seleccionar_carpa").trigger("click");
}
