alert("Bienvenido");

function validar() {
	var nombre,apellido,correo,usuario,contraseña,telefono,expresion;

	nombre=document.getElementById("nombre").value;
	apellido=document.getElementById("apellido").value;
	usuario=document.getElementById("usuario").value;
	clave=document.getElementById("pass").value;
	password=document.getElementById("conPass").value;
	cedula=document.getElementById("cedula").value;
	
	
	if (nombre=== ""||apellido===""||usuario=== ""||contraseña===" "){

		alert(" Todos los campos son obligatorios");
		return false;

	else if(nombre.length>30){
		alert("El nombre es muy largo");
		return false;
	}
	else if(apellido.length>20){
		alert("El apellido es muy largo");
		return false;
	}
	else if(usuario.length>20 || clave.length>20 ){
		alert("El usuario y la clave solo deben tener 20 caracteres máximo");
		return false;
	}
	
	else if (!expresion2.test(contraseña)) {
		alert("La contraseña debe poseer al menos un numero, un caracter especial y letras");
	return false;
	};

	}

}