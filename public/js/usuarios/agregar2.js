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
		let apellido = d.querySelector('#apellido') //input de apellido
		let usuario = d.querySelector('#usuario') //input de username
		let pass = d.querySelector('#pass') //input de pass
		let rol =d.querySelector('#select')//
		let conPass = d.querySelector('#conPass') //input de confirmar pass
		let cedula = d.querySelector('#cedula') //input de confirmar cedula

		let submit = d.querySelector('#submit') //input de submit

		if (estaVacio(nombre, apellido, usuario, pass, conPass, cedula, rol)) {
			alert('Asegurese de llenar todos los campos')
			return false
		} else if (!coincideExpresionRegular(nombre, apellido, usuario, cedula, pass, conPass) ) {
			alert('Hay campos que no coinciden con el tipo de dato esperado')
			return false
		} else if (!contraseñasCoinciden(pass,conPass)){
			alert('Las contraseñas no coinciden.')
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