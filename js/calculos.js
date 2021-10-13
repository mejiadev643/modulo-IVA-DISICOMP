

function imprimevalor(valor){

	
	//console.log("escribiendo");

	let val = parseFloat(document.querySelector("#valor").value);

	val = isNaN(val)? 0 : val.toFixed(2);


	let calculo= setiva13(val);// se recibe el valor del iva

	valortotal(val, calculo);

}


function setiva13(data){

	let iva13 = document.querySelector("#iva13");

	let total= ((data*13)/100).toFixed(2)

	iva13.value= total ;

	return total;

}

function valortotal(valor, iva13){
	let vtotal = document.querySelector("#vtotal");
	let suma = (parseFloat(valor) + parseFloat(iva13)).toFixed(2);
	vtotal.value=suma;

}
