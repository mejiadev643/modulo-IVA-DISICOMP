

function Verificar(){
	//alert("hello");
	let persona = document.querySelector("#ClienteP").value; // el cliente/prov que se se selecciona en el select
	let serie = document.querySelector("#SERIE"); //input de numero de serie del cliente/prov;
	//alert(typeof(persona));
	for (i in str){
		
		if ((str[i].CODCLIENT == persona) && (str[i].GRANCONTRIB == "S")) {
			
			//console.log(str[i].CODCLIENT);
			serie.value = str[i].NUMSERIE;
			contador = 1;
			console.log("es gran contibuyente");
			imprimevalor();
			break;
			
		}else{
			contador = 0;
			console.log("No es gran contibuyente");

			imprimevalor();
		}	
	}
}
