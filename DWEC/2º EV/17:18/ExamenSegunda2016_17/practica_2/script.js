let cantidadPreguntas = $("#cantidadPreguntas").val();

const generarTest = () => {
    let categoria = $("#categoria").val();

    // Limpiamos los div
    $("#preguntas").empty();
    $("#resultado").empty();

    // Activamos boton
    $("#corregirTest").prop('disabled', false);

    // Iniciamos tiempo
    comenzarTiempo();

    $.getJSON("test.json", function (data) {

        // Obtengo la longitud del JSON
        let longitudJSON = Object.keys(data).length;
        let arrayID = [];

        // Genero array con IDs 
        for (let index = 0; index < longitudJSON; index++) {
            arrayID.push(index);
        }

        // Genero preguntas aleatorias
        for (let index = 0; index < cantidadPreguntas; index++) {
            // Obtengo ID aleatorio dentro de la cantidad de preguntas que tengo
            let idAleatorio = generarAleatorio(arrayID);

            // Saco ese ID del array
            let idPregunta = arrayID.splice(idAleatorio, 1)[0];
            let datosPregunta = data[idPregunta];

            if (datosPregunta.categoria == categoria) {
                $("#preguntas").append(`<p>${index+1} - ${datosPregunta.pregunta}</p>`);

                // Para mostrar de manera aleatoria las respuestas
                // Obtengo la cantidad de respuestas que hay
                let cantidadRespuestas = datosPregunta.respuestas.length
                let arrayIDRespuestas = [];
                // Creo un array con los ID
                for (let index = 0; index < cantidadRespuestas; index++) {
                    arrayIDRespuestas.push(index);
                }

                // Recorro las respuestas y las muestro
                for (let index = 0; index < cantidadRespuestas; index++) {
                    // Obtengo ID aleatorio dentro de la cantidad de respuesta que tengo
                    let idAleatorio = generarAleatorio(arrayIDRespuestas);
                    // Lo saco del array de ID
                    let idPregunta = arrayIDRespuestas.splice(idAleatorio, 1)[0];
                    let datosRespuestaPregunta = datosPregunta.respuestas[idPregunta];

                    $("#preguntas").append(`<input type="radio" name="${datosPregunta.correcta}" value="${datosRespuestaPregunta.idrespuesta}"> ${datosRespuestaPregunta.respuesta}<br>`);
                }
            } else {
                index--;
            }
        }
    })
}

let interval;
const comenzarTiempo = () => {
    let comienzo = new Date;

    interval = setInterval(function () {
        // $('#temporizador').text(Math.round((new Date - comienzo) / 1000, 0) + " s");
        let diferencia = new Date(new Date - comienzo);
        $('#temporizador').text((diferencia.getMinutes() < 10 ? "0" + diferencia.getMinutes() : diferencia.getMinutes()) +
            ":" + (diferencia.getSeconds() < 10 ? "0" + diferencia.getSeconds() : diferencia.getSeconds()));
    }, 1000);
}

const corregirTest = () => {
    let aciertos = 0;
    let fallos = 0;

    // Paramos temporizardor
    clearInterval(interval);

    $("#preguntas :radio").each(function () {
        if (this.checked) {
            if (this.value == this.name) {
                aciertos += 1;
            } else {
                fallos += 1;
            }
        }
    });
    let resultado = (((aciertos - fallos) * 10) / cantidadPreguntas);
    $("#resultado").append(`<p>ACIERTOS: ${aciertos} FALLOS: ${fallos} NOTA EXAMEN: ${resultado}</p>`);

    //Desactivamos boton
    $("#corregirTest").prop('disabled', true);
}

const generarAleatorio = array => {
    return Math.floor(Math.random() * array.length);
}

$("#generarTest").click(generarTest);
$("#corregirTest").click(corregirTest);