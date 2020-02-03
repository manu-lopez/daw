let cantidadPreguntas;

const generarTest = () => {
    let categoria = $("#categoria").val();
    cantidadPreguntas = $("#inputCantidadPreguntas").val();

    if (cantidadPreguntas == "" || cantidadPreguntas <= 0) {
        $("#inputCantidadPreguntas").focus();

        // Limpiamos los div
        $("#preguntas").empty();
        $("#resultado").empty();

        // Paramos temporizardor
        clearInterval(interval);

        //Desactivamos boton corregir
        $("#corregirTest").prop('disabled', true);
    } else {

        // Limpiamos los div
        $("#preguntas").empty();
        $("#resultado").empty();

        // Activamos boton corregir
        $("#corregirTest").prop('disabled', false);

        // Iniciamos temporizador
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
                // Saco ese ID del array
                let idPregunta = arrayID.splice(generarAleatorio(arrayID), 1)[0];
                let datosPregunta = data[idPregunta];


                if (datosPregunta.categoria == categoria) {
                    // Añado pregunta
                    $("#preguntas").append(`<br><p id="${datosPregunta.idpregunta}">${index+1} - ${datosPregunta.pregunta}</p>`);

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
                        // Lo saco del array de ID
                        let idPregunta = arrayIDRespuestas.splice(generarAleatorio(arrayIDRespuestas), 1)[0];
                        let datosRespuestaPregunta = datosPregunta.respuestas[idPregunta];

                        // Añado respuestas posibles de la pregunta
                        $("#preguntas").append(`<input type="radio" id="${datosPregunta.idpregunta}" name="${datosPregunta.correcta}" value="${datosRespuestaPregunta.idrespuesta}"> ${datosRespuestaPregunta.respuesta}<br>`);
                    }
                } else {
                    index--;
                }
            }
        })
    }
}

// Función que comienza el temporizador
let interval;
const comenzarTiempo = () => {
    let comienzo = new Date;

    interval = setInterval(function () {
        let diferencia = new Date(new Date - comienzo);

        // Haciendo uso del operador ternario, añadimos 0 a segundos/minutos para que se vea mejor.
        $('#temporizador').text((diferencia.getMinutes() < 10 ? "0" + diferencia.getMinutes() : diferencia.getMinutes()) +
            ":" + (diferencia.getSeconds() < 10 ? "0" + diferencia.getSeconds() : diferencia.getSeconds()));
    }, 1000);
}

const corregirTest = () => {
    let aciertos = 0;
    let fallos = 0;

    // Paramos temporizardor
    clearInterval(interval);

    //Obtenemos todos los input radio y comprobamos si es correcto o no.
    $("#preguntas :radio").each(function () {
        if (this.checked) {
            if (this.value == this.name) {
                $(`#${this.id}`).css("color", "green");
                aciertos += 1;
            } else {
                $(`#${this.id}`).css("color", "red");
                fallos += 1;
            }
        }
    });

    // Calculamos nota
    let resultado = (((aciertos - fallos) * 10) / cantidadPreguntas);
    $("#resultado").append(`<p>ACIERTOS: ${aciertos} FALLOS: ${fallos} NOTA EXAMEN: ${resultado}</p>`);

    //Desactivamos boton
    $("#corregirTest").prop('disabled', true);
}

// Funcion que nos devuelve aleatorio dentro de la longitud del array
const generarAleatorio = array => {
    return Math.floor(Math.random() * array.length);
}

$("#generarTest").click(generarTest);
$("#corregirTest").click(corregirTest);