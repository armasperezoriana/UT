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
		let respuesta1 = d.querySelector('#respuesta1') //input de nombre
		let respuesta2 = d.querySelector('#respuesta2') //input de apellido
		let respuesta3 = d.querySelector('#respuesta3') //input de username
		let respuesta4 = d.querySelector('#respuesta4') //input de pass
		

		let submit = d.querySelector('#submit') //input de submit

		if (estaVacio(respuesta1,respuesta2,respuesta3, respuesta4)) {
			alert('asegurese de llenar todos los campos')
			return false
		} else if (!coincideExpresionRegular(nombre, apellido, username, cedula, pass, conPass) ) {
			alert('hay campos que no coinciden con el tipo de dato esperado')
			return false
		} else if (!contraseñasCoinciden(pass,conPass)){
			alert('Contraseñas no coinciden.')
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