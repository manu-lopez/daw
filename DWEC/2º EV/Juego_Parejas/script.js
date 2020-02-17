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
    }

    $('.carta').on("click", function () {
        girarCarta($(this).attr('id'));
    });
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
    console.log($('#' + cartasElegidas[0] + ".back img").attr('src'));

    // if (cartasElegidas[0] == cartasElegidas[1]) {
    //     console.log("Iguales");
    // } else {
    //     console.log("Diferentes");
    // }

    contador == 0;
}

$('.botonJugar').click(function () {
    comenzarJuego();
    // $(".menu").hide();
})