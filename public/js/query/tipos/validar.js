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
    let nombre = d.querySelector('#nombre_tipo') //input de nombre
    let descripcion = d.querySelector('#descripcion') 
    let tiempo = d.querySelector('#tiempo')
    let submit = d.querySelector('#submit') //input de submit
 if (estaVacio(nombre,descripcion,tiempo)){
      alert('Todos los campos son requeridos')
      return false
    }
    else if (estaVacio(nombre)){
      alert('El campo nombre debe estar lleno')
      return false
    }
    else if (!coincideExpresionRegular(descripción) ) {
      alert('El costo no coincide con el formato aceptado')
      return false
    } 
    else if (!coincideExpresionRegular(nombre) ) {
      alert('Debes ingresar solo caracteres, no permite numeros')
      return false
    } 
   
   return true
  }

  const estaVacio = (...elementos) => {
    let validacion = false
    elementos.forEach(elemento => {
      let valor = elemento.value.trim()
      //en caso de que haya alguno vacio
      if (valor.length <1) {
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
