
function opcionFigura(){
	let figura = document.getElementById('tipo').value;

	document.getElementById('lado_1').value="";
	document.getElementById('lado_2').value="";
	document.getElementById('lado_3').value="";

	if (figura == "cuadrado"){
		document.getElementById('lado_1').disabled=false;
		document.getElementById('lado_2').disabled=true;
		document.getElementById('lado_3').disabled=true;

	} else if (figura == "rectangulo") {
		document.getElementById('lado_1').disabled=false;
		document.getElementById('lado_2').disabled=false;
		document.getElementById('lado_3').disabled=true;

	} else if(figura == "triangulo"){
		document.getElementById('lado_1').disabled=false;
		document.getElementById('lado_2').disabled=false;
		document.getElementById('lado_3').disabled=false;
	
	} else {
		document.getElementById('lado_1').disabled=true;
		document.getElementById('lado_2').disabled=true;
		document.getElementById('lado_3').disabled=true;
	}
}