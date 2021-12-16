 <script>
     alert("Recuerda llenar todas las preguntas");

     function validar(){

      var pregunta1=document.getElementById('pregunta1');
      var pregunta2=document.getElementById('pregunta2');
      var pregunta3=document.getElementById('pregunta3');
      var pregunta4=document.getElementById('pregunta4');
      var respuesta1=document.getElementById('respuesta1');
      var respuesta2=document.getElementById('respuesta2');
      var respuesta3=document.getElementById('respuesta3');
      var respuesta4=document.getElementById('respuesta4');

      if(pregunta1.value==0||pregunta2.value==0||pregunta3.value==0||pregunta4.value==0){

        alert("Debes selecionar 4 preguntas correctamente");
      }

        pregunta1=document.getElementById('pregunta1');
        if (pregunta1.value==0||pregunta1==""){

          alert("Debe selecionar una opcion en la pregunta 1");
          pregunta1.autofocus();

        }else{

          alert("Pregunta 1 selecionada");
        }

         if(respuesta1,respuesta2,respuesta3,respuesta4){

          alert("Asegurese de llenar todas las respuestas")
         }
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


   </script>