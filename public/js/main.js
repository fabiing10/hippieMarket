$(document).ready(function(){
  if ( $('#dataTable').length ) {

    $('#dataTable').DataTable({
      responsive: true
    });

}
  if ($("#condiciones_form").length ) {
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
  }


if ($("#fechaAsignacion").length) {
    $('#fechaAsignacion').datetimepicker({
					timeFormat: 'hh:mm:ss'
		});
}
    var date = $("#dateValue").val();

    var final_date = moment(date).format("YYYY/MM/DD H:m:s");


     $("#getting-started")
     .countdown(final_date, function(event) {
  var $this = $(this).html(event.strftime(''+ '<span>%d</span> Dias '+ '<span>%H</span> Horas '+ '<span>%M</span> Min '+ '<span>%S</span> sec'));
});


});


function loadRegister(value){
  $("#carpa").val(value);
  $("#seleccionar_carpa").trigger("click");
}


function enviarEmail(value){
  $("#usuario_email").val(value);
}
