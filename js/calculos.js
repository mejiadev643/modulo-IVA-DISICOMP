var contador = 0; // variable para conocer si el usuario es gran contibuyente o no

function imprimevalor(){

	
	//console.log("escribiendo");

	let val = parseFloat(document.querySelector("#valor").value);//recolecto el valor de el input valor grabado

	val = isNaN(val)? 0 : val.toFixed(2); //evaluo si es un caracter no valido, si es verdadero se coloca un 0 a la variable
							//si es falso, se coloca el valor de la variable.


	let calculo= setiva13(val);// se recibe el valor que se retorna de la funcion del iva

	let contribuye = grancontri(val);// se recibe el valor que se retorna de la funcion gran contri

	let valrete2 = rete2(val);// se recibe el valor que se retorna de la funcion rete2

	let valfovial = fovial(val);// se recibe el valor que se retorna de la funcion fovial

	let valcotran = cotran(val);// se recibe el valor que se retorna de la funcion cotran	

	let valexe = exen(val);// se recibe el valor que se retorna de la funcion exen


	valortotal(val, calculo, contribuye, valrete2, valfovial, valcotran, valexe ); //se envian las variables a valor total 

}


function setiva13(data){

	let iva13 = document.querySelector("#iva13");

	let total= ((data*13)/100).toFixed(2);

	iva13.value= total ;

	return total;

}

function valortotal(valor, iva13, contribuye, valrete2, valfovial, valcotran, valexe){
	let vtotal = document.querySelector("#vtotal");
	let suma = (parseFloat(valor) + parseFloat(iva13) + parseFloat(contribuye) + parseFloat(valrete2) + parseFloat(valfovial) + parseFloat(valcotran) + parseFloat(valexe)).toFixed(2);
	vtotal.value=suma;

}


function grancontri(val){
	let contrib = document.querySelector("#iva1");
	//let check= document.querySelector("#boton");
	let total;

	if(contador == 1){
		total = ((val*1)/100).toFixed(2);

		contrib.value= total;
		
		//console.log("no hay ");

	}else{
		total = "0.00";
		//console.log("modificado");

	}
	
	return total;

}


function contrib(){
	grande = document.querySelector("#boton");
	let contrib = document.querySelector("#iva1");

	if (contador == 0){
		grande.className = "zmdi zmdi-check";

		
		let val = parseFloat(document.querySelector("#valor").value);

		let nuevovalor = ((val*1)/100).toFixed(2);

		contrib.value= nuevovalor;

		
		let nvalor = document.querySelector("#vtotal")//valordel nodo

		
		let valoractual = parseFloat(nvalor.value).toFixed(2);
		
		
		nvalor.value = (parseFloat(valoractual) + parseFloat(contrib.value) ).toFixed(2) ;

	
		contador = 1 ;
		//console.log("modificado");

	}else{
		grande.className = "zmdi zmdi-circle-o";

		let nvalor = document.querySelector("#vtotal")//valordel nodo

		let valoractual = parseFloat(nvalor.value ).toFixed(2);
		//console.log(valoractual);

		let descuento = parseFloat(contrib.value).toFixed(2);
		//console.log(descuento);
		nvalor.value = (valoractual - descuento).toFixed(2) ;


		contrib.value = "0.00";

		contador = 0;
		//console.log("si pasa por else");
	}
	
}	


function fovial(){
	
	let fo = parseFloat(document.querySelector("#fovial").value).toFixed(2);
	
		return fo;
}

function cotran(){
	
	let co = parseFloat(document.querySelector("#cotran").value).toFixed(2);
	
		return co;
}

function rete2(){
	
	let r2 = parseFloat(document.querySelector("#iva2").value).toFixed(2);
	
		return r2;
}


function exen(){
	
	let ex = parseFloat(document.querySelector("#exentas").value).toFixed(2);
	
		return ex;
}
 