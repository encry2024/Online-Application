$(document).ready(function() {
	
	$('#frCep').simpleMask( { 'mask': '#####-###', 'nextInput': $('#frTel') } );
	$('#frTel').simpleMask( { 'mask': ['####-####','#####-####'], 'nextInput': $('#cc') } );
$('#cc').simpleMask( { 'mask': '####-####-####-####' } );
	$('#frCep').focus();

});