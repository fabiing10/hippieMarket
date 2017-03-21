$(document).ready(function(){
    $('#dataTable').DataTable({
      responsive: true
    });
    $("#condiciones_form").validate({
      rules: {
          tipo_organizacion: "required",
          nit: "required",
          nombre_marca: "required",
          representante_legal: "required",
          cedula: "required",
          direccion: "required",
      },messages: {
          tipo_organizacion: "Seleccione una opcion",
          nit: "Porfavor digite el NIT de la empresa/persona",
          nombre_marca: "Porfavor digite el nombre de la marca",
          representante_legal: "Porfavor digite el nombre del representante legal",
          cedula: "Porfavor digite la cedula",
          direccion: "Porfavor digite una direccion",
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
