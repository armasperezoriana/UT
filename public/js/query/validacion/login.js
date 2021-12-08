( c, d, a )=>{

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
    let usuario = d.querySelector('#usuario') //input de usuario
    let contrasena = d.querySelector('#contrasena') //input de contrasena
    let captcha = d.querySelector('#captcha') //input de captcha
   
    let submit = d.querySelector('#submit') //input de submit

    if (estaVacio(usuario,contrasena)) {
      alert('Todos los campos son obligatorios')
      return false
    } 
    else if (estaVacio(captcha)) {
      alert('Debe llenar el captcha')
      return false
    }
    else if (!coincideExpresionRegular(usuario, contrasena) ) {
      alert('Hay campos que no coinciden con el tipo de dato esperado')
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
