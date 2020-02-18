const frutas = ["aguacate", "aguacate", "fresa", "fresa", "kiwi", "kiwi", "manzana", "manzana", "platano", "platano"];
let nombre;
let cartasElegidas = [];
let contador = 0;


const comenzarJuego = () => {
    nombre = $('#nombre').val();
    mostrarCartas($('input[name=nivel]:checked').val());
}

const mostrarCartas = dificultad => {
    // $(`<h2>${nombre}</h2>`).insertBefore(".juego");
    $(".juego").empty();

    // Seleccionamos frutas según nivel y desordenamos
    let arrayFrutas = frutas.slice(0, parseInt(dificultad)).sort(function () {
        return 0.5 - Math.random()
    });

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

    if (contador == 2) {
        comprobarPareja();
    }
}

const comprobarPareja = () => {

    let carta1 = $('#' + cartasElegidas[0] + ".back img").attr('src');
    let carta2 = $('#' + cartasElegidas[1] + ".back img").attr('src');

    if (carta1 == carta2) {
        // Quitamos ambas cartas
        $('#' + cartasElegidas[0] + ".back").css("opacity", "40%");
        $('#' + cartasElegidas[1] + ".back").css("opacity", "40%");

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

$('.botonJugar').click(function () {
    comenzarJuego();
    // $(".menu").hide();
})