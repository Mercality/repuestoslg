$('#inputFechan').change(function(){
var hoy = moment(),
	fechan = moment($('#inputFechan').val()),
	edad = hoy.diff(fechan, 'years');
 $('#inputEdad').val(edad);
 $('#inputEdad').attr('value', edad);
});


$(window).load(function(){

	$('#inputFechan').datepicker({

	defaultDate: "-10y",
	showButtonPanel: true,
	dateFormat : 'yy/mm/dd',
	changeMonth: true,
    changeYear: true
	});
	$.datepicker.setDefaults( $.datepicker.regional[ "es" ] );

});


