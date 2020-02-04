let divBienvenida = $('.bienvenida');
let numeroPreguntas = [];
let nombreUsuario, preguntas;


const comenzarJuego = () => {
  nombreUsuario = $('#nombreUsuario').val();

  if (nombreUsuario == "") {
    console.log("VACIO");
  } else {
    divBienvenida.empty();
    divBienvenida.append(`<p> Hola <b>${nombreUsuario}</b></p>`);
    divBienvenida.append(`<button class="btn btn-secondary" id="pregunta">&#x2705; Pregunta &#x2705;</button>
                          <button class="btn btn-secondary" id="plantarse">&#x1F333; Plantarse &#x1F333;</button>`);
  }

  $('#pregunta')[0].addEventListener("click", pregunta);
  $('#plantarse')[0].addEventListener("click", plantarse);
  obtenerDatos();
}

const pregunta = () => {
  let preguntaAleatoria = preguntas[numeroPreguntas.splice(Math.random() * numeroPreguntas.length, 1)];
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