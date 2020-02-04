let divBienvenida = $('.bienvenida');
let divPreguntas = $('.preguntas');
let numeroPreguntas = [];
let contadorPregunta = 0;
let puntos = 0;
let nombreUsuario, preguntas, btnPregunta, btnPlantarse;

//TODO Grabar datos antes de terminar
//TODO Acabar al no haber más preguntas
//TODO Acabar al pulsar plantarse
//TODO Acabar al equivocarse

const comenzarJuego = () => {

  if (contadorPregunta < 1) {
    nombreUsuario = $('#nombreUsuario').val();
  }

  if (nombreUsuario == "") {
    console.log("VACIO");
  } else {
    divBienvenida.empty();
    divPreguntas.empty();
    if (contadorPregunta < 1) {
      divBienvenida.append(`<p> Hola <b>${nombreUsuario}</b>, que deseas hacer?</p>`);
      divBienvenida.append(`<p> Puntos: <b>${puntos}</b></p>`);
    } else {
      divBienvenida.append(`<p> ¡HAS ACERTADO! <b>${nombreUsuario}</b>, que deseas hacer?</p>`);
      divBienvenida.append(`<p> Puntos: <b>${puntos}</b></p>`);
    }
    divBienvenida.append(`<button class="btn btn-secondary" id="pregunta">&#x2705; Pregunta &#x2705;</button>
                          <button class="btn btn-secondary" id="plantarse">&#x1F333; Plantarse &#x1F333;</button><br>`);

    btnPregunta = $('#pregunta');
    btnPlantarse = $('#plantarse');

    btnPregunta[0].addEventListener("click", pregunta);
    btnPlantarse[0].addEventListener("click", plantarse);

    if (contadorPregunta == 0) {
      obtenerDatos();
    }
  }

}

const pregunta = () => {
  contadorPregunta++;

  // Limpiamos el div
  divPreguntas.empty();

  // Seleccionamos pregunta y añadimos a div
  let indice = (Math.floor(Math.random() * numeroPreguntas.length));

  let preguntaAleatoria = preguntas[numeroPreguntas.splice(indice, 1)];
  divPreguntas.append(`<br><h3>Pregunta: ${contadorPregunta}</h3>`);
  divPreguntas.append(`<br><p>Tema: <b>${preguntaAleatoria.tema}</b></p>`);
  divPreguntas.append(`<p>Pregunta: <b>${preguntaAleatoria.pregunta}</b></p>`);


  preguntaAleatoria.respuestas.forEach(function (respuestas, index) {
    divPreguntas.append(`<button class="btnRespuesta btn btn-outline-dark"value="${respuestas.correcta}"> ${respuestas.respuesta}</button><br>`);

    $(".btnRespuesta")[index].addEventListener("click", comprobarRespuesta);
  });


  btnPregunta.prop('disabled', true);
  btnPlantarse.prop('disabled', true);
}

const comprobarRespuesta = () => {

  if (event.target.value == "s") {
    sumarPuntos();
    comenzarJuego();
  } else {
    alert("HAS FALLADO 😓");
    // acabarJuego();
  }
}

const acabarJuego = () => {
  btnPregunta.prop('disabled', true);
  btnPlantarse.prop('disabled', true);

  divBienvenida.empty();
  divPreguntas.empty();

  divBienvenida.append(`<p> Se acabó <b>${nombreUsuario}</b></p>`);
  divBienvenida.append(`<p> Puntos: <b>${puntos}</b></p>`);
}

const sumarPuntos = () => {

  if (contadorPregunta <= 2) {
    puntos++;
  } else {
    puntos = (Math.pow(2, contadorPregunta) / 2)
  }
}

const obtenerDatos = () => {

  $.ajax({
    type: 'GET',
    url: 'preguntas.json',
    dataType: 'json',
    success: function (datos) {
      preguntas = datos;

      // Vamos a crear un array con los indices de las preguntas
      for (let index = 0; index < datos.length; index++) {
        numeroPreguntas.push(index);
      }

    }
  });
}

$('#comenzarJuego')[0].addEventListener("click", comenzarJuego);