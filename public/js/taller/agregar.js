(( c, d, a )=>{

	d.addEventListener('DOMContentLoaded',()=>{

		submit.addEventListener('click', (e)=>{

			if (validacionEstaBien()) { //function principal de validacion
				c('validacion correcta!')
			}else{
				c('validacion incorrecta')
				e.preventDefault() //prevenir que se envie el formulario
			}
		})


	})

	const validacionEstaBien = ()=> {
		//tomar inputs y botones
		let nombre = d.querySelector('#nombre') //input de nombre
		let direccion = d.querySelector('#direccion') //input de apellido
		let informacion_contacto = d.querySelector('#informacion_contacto') //input de username
		let rif = d.querySelector('#rif') //input de pass
	
		
		let submit = d.querySelector('#submit') //input de submit

		if (estaVacio(nombre, direccion, informacion_contacto)) {
			alert('Asegurese de llenar todos los campos')
			return false
		} else if (!coincideExpresionRegular(nombre, direccion, informacion_contacto) ) {
			alert('Hay campos que no coinciden con el tipo de dato esperado')
			return false
		} else if (!coincideExpresionRegular(nombre, direccion, informacion_contacto)){
			alert('Asegurese de escribir correctamente su cedula')
			return false
		}
		return true
	}

	const estaVacio = (...elementos) => {
		let validacion = false
		elementos.forEach(elemento => {
			let valor = elemento.value.trim()
 			//en caso de que haya alguno vacio
			if (valor.length <= 3) {
				//si entra en la condicional es porque
				//hay uno vacio
				validacion = true 
				elemento.classList.add('alerta-input')
			} else {
				elemento.classList.remove('alerta-input')
			}
		})
		return validacion
	}

	const coincideExpresionRegular = (...elementos) => {
		let validacion = true
		elementos.forEach(elemento => {
			let patron = elemento.dataset.patron
			let valor = elemento.value.trim()

			if (!valor.match(patron)) {
				validacion = false
				elemento.classList.add('alerta-input')
				elemento.nextElementSibling.classList.remove('esconder')
			} else {
				elemento.classList.remove('alerta-input')
				elemento.nextElementSibling.classList.add('esconder')
			}
		})
		return validacion
	}

	const contraseñasCoinciden = (a, b) => {
		let valorA = a.value.trim()
		let valorB = b.value.trim()

		if ( valorA === valorB ) {
			c('si pasa')
			return true
		} else {
			return false
		}
	}

})(console.log, document, alert)