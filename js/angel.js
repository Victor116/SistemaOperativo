$(document).ready(function() {
	$( "#fkPaint" ).draggable();
    $('.datepicker').pickadate({
        format: 'mm/dd/yyyy',
        formatSubmit: 'mm/dd/yyyy',
        hiddenName: true
    });

});
function mostrarPaint(){
	document.getElementById('fkPaint').style.display = 'block';
}
function closePaint(){
	document.getElementById('fkPaint').style.display = 'none';
}