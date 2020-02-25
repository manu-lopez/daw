let posiciones = [""];
const meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

const obtenerJson = () => {
    $.getJSON("palabras.json", function (data) {
        let palabrasElegidas = [];
        for (let index = 10; index >= 4; index--) {
            palabrasElegidas.push(data[index][Math.floor(Math.random() * 3)]);
        }
        dibujarPalabras(palabrasElegidas);
    });
}

const dibujarPalabras = datos => {

    datos.forEach(element => {
        for (let index = 0; index < element.palabra.length; index++) {

            // Comprobamos que no este en el array y se añade
            if (posiciones.indexOf(element.palabra[index]) == -1) {
                posiciones.push(element.palabra[index])
            }
            $(".palabras").append(`<input class="${posiciones.indexOf(element.palabra[index])} target" type="text" ${posiciones.indexOf(element.palabra[index])} placeholder="${posiciones.indexOf(element.palabra[index])}">`);

        }
        $(".palabras").append(`<p>${element.definicion}</p>`);
        $(".palabras").append("<br>");
        // console.log(element.palabra);
    });

    $(".target").keyup(function () {
        if (this.value.length == 1) {
            comprobarLetra();
        }
    });
}

const comprobarLetra = () => {
    // Cogemos la primera clase, que corresponde a la posicion de la letra
    let posicionIntroducida = event.target.className.split(' ')[0];
    let letraIntroducida = event.target.value;

    if (letraIntroducida == posiciones[posicionIntroducida]) {
        $("." + posicionIntroducida).val(letraIntroducida);
        $("." + posicionIntroducida).toggleClass("acertado");
        $("." + posicionIntroducida).prop("disabled", true);

        // Comprobamos si se completó el logogrifo
        if ($("input:not(.acertado)").length == 0) {
            Swal.fire(
                'Enhorabuena!',
                'Completaste el Logo🚰',
                'success'
            )
        } else {
            if ($(event.target).next('').hasClass("acertado")) {
                $("input:not(.acertado)")[0].focus();
            } else {
                $(event.target).next('input').focus();
            }
        }
    }

}

let fecha = new Date();
$(".time").append(`<time>${fecha.getDate() + " de " + meses[fecha.getMonth()] + " de " + fecha.getFullYear()}</time>`)
obtenerJson();