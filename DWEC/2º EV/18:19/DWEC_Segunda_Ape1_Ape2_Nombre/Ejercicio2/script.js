let divBienvenida = $('.bienvenida');
let divPreguntas = $('.preguntas');
let numeroPreguntas = [];
let contadorPregunta = 0;
let puntos = 0;
let nombreUsuario, preguntas, btnPregunta, btnPlantarse;


// Función que da comienzo al juego.
// Muestra el menu con las opciones
const comenzarJuego = () => {

  if (contadorPregunta < 1) {
    nombreUsuario = $('#nombreUsuario').val();
  }

  if (nombreUsuario == "") {
    $("#modalNombreUsuario").modal("show");
    console.log("VACIO");

  } else {
    // Limpiamos los datos anteriores
    divBienvenida.empty();
    divPreguntas.empty();

    if (contadorPregunta < 1) {
      divBienvenida.append(`<p> Hola <b>${nombreUsuario}</b>, que deseas hacer?</p>`);
      divBienvenida.append(`<p> Puntos: <b>${puntos}</b></p>`);
    } else {
      divBienvenida.append(`<p> <span class="acertaste">¡HAS ACERTADO!</span> <b>${nombreUsuario}</b>, que deseas hacer?</p>`);
      divBienvenida.append(`<p> Puntos: <b>${puntos}</b></p>`);
    }
    divBienvenida.append(`<button class="btn btn-secondary" id="pregunta">&#x2705; Pregunta &#x2705;</button>
                          <button class="btn btn-secondary" id="plantarse">&#x1F333; Plantarse &#x1F333;</button><br>`);

    btnPregunta = $('#pregunta');
    btnPlantarse = $('#plantarse');

    btnPregunta[0].addEventListener("click", pregunta);
    btnPlantarse[0].addEventListener("click", acabarJuego);

    if (contadorPregunta == 0) {
      obtenerDatos();
    }
  }

}


// Esta funcion nos elige la pregunta y nos la muestra
const pregunta = () => {
  contadorPregunta++;

  // Limpiamos el div
  divPreguntas.empty();

  if (numeroPreguntas.length >= 1) {
    // Seleccionamos pregunta y añadimos a div
    let indice = (Math.floor(Math.random() * numeroPreguntas.length));

    let preguntaAleatoria = preguntas[numeroPreguntas.splice(indice, 1)];
    divPreguntas.append(`<br><h3>Pregunta: ${contadorPregunta}</h3>`);
    divPreguntas.append(`<br><p>Tema: <b>${preguntaAleatoria.tema}</b></p>`);
    divPreguntas.append(`<p>Pregunta: <b>${preguntaAleatoria.pregunta}</b></p>`);

    // Mostramos las diferentes respuestas
    preguntaAleatoria.respuestas.forEach(function (respuestas, index) {
      divPreguntas.append(`<button class="btnRespuesta btn btn-outline-dark"value="${respuestas.correcta}"> ${respuestas.respuesta}</button><br>`);

      // Asiganamos el listener a cada boton
      $(".btnRespuesta")[index].addEventListener("click", comprobarRespuesta);
    });

  } else {
    acabarJuego();
    divPreguntas.append(`<br>Ya no hay más preguntas`);
  }

  // Desactivamos botones
  btnPregunta.prop('disabled', true);
  btnPlantarse.prop('disabled', true);
}


// Comprobamos si es correcta la respuesta indicada
const comprobarRespuesta = () => {

  if (event.target.value == "s") {
    sumarPuntos();
    comenzarJuego();
  } else {
    alert("HAS FALLADO 😓");
    acabarJuego();
  }
}

// Grabamos datos en archivo y acabamos juego
const acabarJuego = () => {

  $.ajax({
    type: 'post',
    url: 'graba.php',
    data: `usuario=${nombreUsuario}&puntos=${puntos}`,
    success: function () {
      console.log("Datos guardados");
    },
  });

  btnPregunta.prop('disabled', true);
  btnPlantarse.prop('disabled', true);

  divBienvenida.empty();
  divPreguntas.empty();

  divBienvenida.append(`<p> Se acabó <b>${nombreUsuario}</b></p>`);
  divBienvenida.append(`<p> Puntos: <b>${puntos}</b></p>`);
}

// Función para contar los puntos según aciertas
// Si la respuesta elegida es la correcta se anotará un punto 
// la primera vez, 2 puntos la segunda, 4 la tercera, 8 la cuarta
// y así sucesivamente (potencias de 2)
const sumarPuntos = () => {

  if (contadorPregunta <= 2) {
    puntos++;
  } else {
    puntos = (Math.pow(2, contadorPregunta) / 2)
  }
}

// Obtengo los datos del archivo json
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