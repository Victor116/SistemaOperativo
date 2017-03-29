$(document).ready(function(){
    $('#notas').draggable({containment: "parent"});
    $('#calculadora_chida').draggable({containment: "parent"});
    $('#datos').draggable({containment: "parent"});
    $('#administradorchido').draggable({containment: "parent"});
    $('#bblocknotas').draggable({containment: "parent"});
});

function ocultar(){
$('#calculadora_chida').fadeToggle(1500);}

function mostrar(){
document.getElementById('calculadora_chida').style.display = 'block';
}


function ocultar2(){
$('#datos').fadeToggle(1500);}

function mostrar2(){
document.getElementById('datos').style.display = 'block';}

function ocultar3(){
	$('#administradorchido').fadeToggle(1000);}

function mostrar3(){
document.getElementById('administradorchido').style.display = 'block';}

function ocultar4(){
	$('#bblocknotas').fadeToggle(1000);}

function mostrar4(){
document.getElementById('bblocknotas').style.display = 'block';}

function ocultar5(){
	$('#notas').fadeToggle(1000);}

function mostrar5(){
	document.getElementById('notas').style.display = 'block';}

function agregarnumero(valor, cantidadEnPantalla){
	if (valor.value == null || valor.value == 0){
		valor.value = cantidadEnPantalla;
	} else{
		valor.value += cantidadEnPantalla;
	}
}

function eliminarnumero(valor){
	valor.value = valor.value.substring(0, valor.value.length - 1);}

function calcular(form){
	form.resultado.value = eval(form.resultado.value);}

function cambiarFuente(){
	var fuente = document.getElementById('fuente');

	if(fuente.value != ""){
		document.getElementById('textoNotas').style.fontFamily = fuente.value;
		document.getElementById('fuente').value = "";
	} else {
		alert("Llena el campo de la fuente.");
	}
}

function cambiarTamano(){
	var tamano = document.getElementById('tamanoLetra');

	if(tamano.value != ""){
		document.getElementById('textoNotas').style.fontSize = tamano.value+"px";
		document.getElementById('tamanoLetra').value = "";
	} else {
		alert("Llena el campo del tamaño");
	}
}

function abrirEditor(){
		document.getElementById('notas').style.display = 'block';
		document.getElementById('filefile').addEventListener('change', function() {
			var fr = new FileReader();
			fr.onload = function(){
				document.getElementById('textoNotas').textContent = this.result;
			}
			fr.readAsText(this.files[0]);
		})
}

function cambiarModificar() {
	document.getElementById('a117').style.display = 'none';
	document.getElementById('a13').style.display = 'block';
}

function insertarModificar() {
	document.getElementById('a117').style.display = 'block';
	document.getElementById('a13').style.display = 'none';
}

/*function mostra_new_archivo(){
	var div = document.createElement("div"),
		new_archivo = document.createElement("input"),
		guardar = document.createElement("input"),
		ver = document.createElement("input"),
		ayudar = document.createElement("input"),
  		texto = document.createElement("input"),

  		figura = document.createElement("figure"),
  		imagen = document.createElement("img"),
  		mapeo = document.createElement("map"),
  		area = document.createElement("area");
  		
  		figura.setAttribute("class", "posicion_barraCerrar3");
  		imagen.setAttribute("class", "tamano_barraCerrar");
  		imagen.setAttribute("src", "img/barra_cerrar.jpg");
  		imagen.setAttribute("usemap", "#notas");
  		mapeo.setAttribute("name", "notas");
  		area.setAttribute("shape", "rect");
  		area.setAttribute("coords", "46,0,85,25");
  		area.setAttribute("alt", "Minimizar");

  		div.setAttribute("class", "notas");
  		div.setAttribute("id", "notas");
		new_archivo.setAttribute("type", "button");
		new_archivo.setAttribute("value", "Nuevo archivo");
		new_archivo.setAttribute("class", "boton_archivo");
		guardar.setAttribute("type", "button");
		guardar.setAttribute("value", "Guardar");
		guardar.setAttribute("class", "boton_archivo");
		ver.setAttribute("type", "button");
		ver.setAttribute("value", "Ver");
		ver.setAttribute("class", "boton_archivo");
		ayudar.setAttribute("type", "button");
		ayudar.setAttribute("value","Ayuda");
		ayudar.setAttribute("class", "boton_archivo");
		texto.setAttribute("type", "text");
		texto.setAttribute("class", "text_archivo");

		area.onclick = ocultar3;

		mapeo.appendChild(area);
		figura.appendChild(imagen);
		figura.appendChild(mapeo);
		div.appendChild(figura);

		div.appendChild(new_archivo);
		div.appendChild(guardar);
		div.appendChild(ver);
		div.appendChild(ayudar);
		div.appendChild(texto);

		document.getElementById('disponible').appendChild(div);
		$('#notas').draggable({containment: "parent"});
}*/

/*$('#calculadora_chida').draggable({containment: 'document'});*/