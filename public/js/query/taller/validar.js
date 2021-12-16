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
    let rif = d.querySelector('#rif') //input de nombre
    let nombre = d.querySelector('#nombre') //input de apellido
    let direccion = d.querySelector('#direccion')
    let informacion =d.querySelector('#informacion_contacto')
   

    let submit = d.querySelector('#submit') //input de submit
 if (estaVacio(rif,nombre,direccion,informacion_contacto)){
      alert('Todos los campos son requeridos')
      return false
    }
    else if (!coincideExpresionRegular(rif)){
      alert('El campo rif no cumple con el formato')
      return false
    }
    else if (!coincideExpresionRegular(nombre)){
      alert('El campo rif no cumple con el formato')
      return false
    }
    else if (!coincideExpresionRegular(nombre)){
      alert('El campo informacion no cumple con el formato')
      return false
    }
    else if (!coincideExpresionRegular(direccion)){
      alert('El campo rif no cumple con el formato')
      return false
    }
     else if(rif.length<5 ){
      alert("El rif es demasiado corto")
      return false
    }
    else if (estaVacio(nombre)){
      alert('El campo nombre debe estar lleno')
      return false
    }
    else if (!coincideExpresionRegular(direccion) ) {
      alert('La direccion no coincide con el formato')
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

})(console.log, document, alert)
