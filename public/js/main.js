$(document).ready(function(){
    $('#dataTable').DataTable({
      responsive: true
    });

    $("#myform").validate({
       rules: {
         name: "required",
         name: "required",
         name: "required",

       }
     });
});


function loadRegister(value){
  $("#carpa").val(value);
  $("#seleccionar_carpa").trigger("click");
}


function enviarEmail(value){
  $("#usuario_email").val(value);
}
