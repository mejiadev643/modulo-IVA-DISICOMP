var contador = 0; // variable para conocer si el usuario es gran contibuyente o no, se utiliza en los modulos de grancontrib() y contrib();

function imprimevalor(){
/*Esta funcion desencadena una reaccion con las demas funciones para recibir los valores de los inputs
 y asi poder obtener el valor total de la transaccion de manera automatica*/

	let val = parseFloat(document.querySelector("#valor").value);//recolecto el valor de el input valor grabado

	val = isNaN(val)? 0 : val.toFixed(2); //evaluo si es un caracter no valido, si es verdadero se coloca un 0 a la variable
							//si es falso, se coloca el valor de la variable.

	let calculo= setiva13(val);// se recibe el valor que se retorna de la funcion del iva

	let contribuye = grancontri(val);// se recibe el valor que se retorna de la funcion gran contri

	let valrete2 = rete2(val);// se recibe el valor que se retorna de la funcion rete2

	let valfovial = fovial(val);// se recibe el valor que se retorna de la funcion fovial

	let valcotran = cotran(val);// se recibe el valor que se retorna de la funcion cotran	

	let valexe = exen(val);// se recibe el valor que se retorna de la funcion exen


	valortotal(val, calculo, contribuye, valrete2, valfovial, valcotran, valexe ); //se envian las variables a valor total para sumarse

}


function setiva13(data){
/*Esta funcion permite conocer el 13% de una transacion realizada
se formatea a decimal y se redondea a 2 decimales para que la transaccion sea correcta*/
	let iva13 = document.querySelector("#iva13");

	let total= ((data*13)/100).toFixed(2);

	iva13.value= total ;

	return total;

}

function valortotal(valor, iva13, contribuye, valrete2, valfovial, valcotran, valexe){
	/*Funcion que realiza la sumatoria de todo el total de la transaccion*/
	let vtotal = document.querySelector("#vtotal");//se toma el input de la suma total 
	let suma = (parseFloat(valor) + parseFloat(iva13) + parseFloat(contribuye) + parseFloat(valrete2) + parseFloat(valfovial) + parseFloat(valcotran) + parseFloat(valexe)).toFixed(2);//se hace la suma
	vtotal.value=suma; //se escribe el valor en el formulario para guardarse en la base de datos

}


function grancontri(val){
	let contrib = document.querySelector("#iva1");
	let check = document.querySelector("#boton");// se revisa si el boton esta marcado
	let valor = parseFloat(document.querySelector("#valor").value);// valor de entrada de la factura

	
	let total;
	//console.log("se reviso el check");
			
	if(contador == 1 ){


		if (valor.toFixed(2) >= 100.00) {

			total = ((val*1)/100).toFixed(2);

			contrib.value = total;

		}else{

			total = "0.00";
			contrib.value = total;
			// console.log("pasa por else");
			// console.log(total);
		}

	}else{
		total = "0.00";
		contrib.value= total;

		//console.log("modificado");

	}
	
	return total;

}


function contrib(){
	/*
	Esta funcion esta pegada al boton de gran contribuyente, si presiono el boton se generara
	una seleccion de los inputs y el boton correspondientes a lo que vamos a trabajar
	Se ha mejorado para evaluar si el contribuyente hace una compra de mas de 100 dolares para aplicar un descuento
	*/
	grande = document.querySelector("#boton");//boton que cambiaremos de apariencia
	let contrib = document.querySelector("#iva1");//input que manipularemos

	let val = parseFloat(document.querySelector("#valor").value);// valor de entrada de la factura

	if (contador == 0) {// si contador es cero, se procede a escribir el valor del 1%

		let evaluar = parseFloat(contrib.value);// variable utilizada para conocer si hay un valor diferente a 0.00 dolares
		//console.log(evaluar);

		if (evaluar.toFixed(2) == 0.00){// si el valor de contrib,value es 0.00

			grande.className = "zmdi zmdi-check";//cambiamos el icono a checkeado

			//se procede a asignar un nuevo valor
			let nuevovalor = (val >= 100.00)? ((val*1)/100).toFixed(2): "0.00" ;//se evalua si existe una cantidad igual o mayor que 10o dolares, para procesar el descuento de acuerdo a la ley
		    contrib.value= nuevovalor;	//se asigna un nuevo valor

			let nvalor = document.querySelector("#vtotal")//valor del total registrado
		
			let valoractual = parseFloat(nvalor.value).toFixed(2);//se crea una variable para usarse mas adelante en la siguiente operacion
		
			nvalor.value = (parseFloat(valoractual) + parseFloat(contrib.value) ).toFixed(2) ; //se procede a operar, se hace una suma para sumar el valor actual con el nuevo valor
			contador = 1 ; //se declara que la variable ha sido utilizada

		}else{// si el valor evaluar no es igual a 0 se procede a restar del total el valor obtenido
			let nvalor = document.querySelector("#vtotal")//valordel nodo
			let valoractual = parseFloat(nvalor.value).toFixed(2);
			nvalor.value = (parseFloat(valoractual) - parseFloat(contrib.value) ).toFixed(2) ;

			contrib.value = "0.00";
			contador = 0 ;
		}


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
	fo = isNaN(fo)? 0 : fo; //evaluo si es un caracter no valido, si es verdadero se coloca un 0 a la variable

	
		return fo;
}

function cotran(){
	
	let co = parseFloat(document.querySelector("#cotran").value).toFixed(2);
	co = isNaN(co)? 0 : co; //evaluo si es un caracter no valido, si es verdadero se coloca un 0 a la variable
	
		return co;
}

function rete2(){
	
	let r2 = parseFloat(document.querySelector("#iva2").value).toFixed(2);
	r2 = isNaN(r2)? 0 : r2; //evaluo si es un caracter no valido, si es verdadero se coloca un 0 a la variable
	
		return r2;
}


function exen(){
	
	let ex = parseFloat(document.querySelector("#exentas").value).toFixed(2);
	ex = isNaN(ex)? 0 : ex; //evaluo si es un caracter no valido, si es verdadero se coloca un 0 a la variable

	
		return ex;
}
 