const frutas = ["aguacate", "aguacate", "fresa", "fresa", "kiwi", "kiwi", "manzana", "manzana", "platano", "platano"];
let total;
let cartasElegidas = [];
let contador = 0;
let intentos = 0;
let interval;

const comenzarJuego = () => {
    comenzarTiempo();
    nombre = $('#nombre').val();
    mostrarCartas($('input[name=nivel]:checked').val());
    $('.botonJugar a').addClass("disabled");
}

const mostrarCartas = dificultad => {
    $(".juego").empty();
    total = dificultad / 2;

    // Seleccionamos frutas según nivel y desordenamos
    let arrayFrutas = frutas.slice(0, parseInt(dificultad)).sort(function () {
        return 0.5 - Math.random()
    });

    // Mostramos las cartas
    for (let index = 0; index < dificultad; index++) {
        $(".juego").append(`<div id="card${index}" class="carta d${dificultad} front"></div>
                            <div id="card${index}" class="carta d${dificultad} back"><img src="img/${arrayFrutas[index]}.png"></div>`);
        $('#card' + index).on("click", function () {
            girarCarta("card" + index);
        });
    }
}

const girarCarta = id => {
    $('#' + id + ".front").css("visibility", "collapse");
    $('#' + id + ".back").css("visibility", "visible");

    // Desactivamos click de carta clickada
    $('.carta#' + id).off("click");

    cartasElegidas.push(id);
    contador++;

    // Si hemos hecho click en dos cartas, comprobamos
    if (contador == 2) {
        comprobarPareja();
    }
}

const comprobarPareja = () => {

    let carta1 = $('#' + cartasElegidas[0] + ".back img").attr('src');
    let carta2 = $('#' + cartasElegidas[1] + ".back img").attr('src');

    intentos++;
    console.log(intentos);
    $(".intentos").html("Intentos: " + intentos);

    if (carta1 == carta2) {
        // Quitamos ambas cartas
        $('#' + cartasElegidas[0] + ".back").css("opacity", "40%");
        $('#' + cartasElegidas[1] + ".back").css("opacity", "40%");

        // Restamos cartas restantes
        total--;

        // Si aciertas todas
        if (total == 0) {
            Swal.fire(
                'Enhorabuena!',
                'Has acertado!',
                'success'
            )
            $('.botonJugar a').removeClass("disabled");
            clearInterval(interval);
        }
    } else {
        // Volteamos ambas cartas
        voltearCartas();

        // Volvemos a activar el click en ambas cartas
        $('#' + cartasElegidas[0]).on("click", function () {
            girarCarta($(this).attr("id"));
        });
        $('#' + cartasElegidas[1]).on("click", function () {
            girarCarta($(this).attr("id"));
        });
    }

    // Reseteamos contador y array para comprobar cartas
    contador = 0;
    cartasElegidas = [];
}

voltearCartas = () => {
    $('#' + cartasElegidas[0] + ".back").delay(800).queue(function (next) {
        $(this).css("visibility", "collapse");
        next();
    });
    $('#' + cartasElegidas[0] + ".front").delay(800).queue(function (next) {
        $(this).css("visibility", "visible");
        next();
    });
    $('#' + cartasElegidas[1] + ".back").delay(800).queue(function (next) {
        $(this).css("visibility", "collapse");
        next();
    });
    $('#' + cartasElegidas[1] + ".front").delay(800).queue(function (next) {
        $(this).css("visibility", "visible");
        next();
    });
}

// Temporizador
const comenzarTiempo = () => {
    let comienzo = new Date;

    interval = setInterval(function () {
        let diferencia = new Date(new Date - comienzo);

        // Haciendo uso del operador ternario, añadimos 0 a segundos/minutos para que se vea mejor.
        $('#temporizador').text((diferencia.getMinutes() < 10 ? "0" + diferencia.getMinutes() : diferencia.getMinutes()) +
            ":" + (diferencia.getSeconds() < 10 ? "0" + diferencia.getSeconds() : diferencia.getSeconds()));
    }, 1000);
}

$('.botonJugar a').click(function () {
    comenzarJuego();
})