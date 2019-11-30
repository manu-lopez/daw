let xhr = new XMLHttpRequest();
let mostrarCategoria = document.getElementById("categoria");
let mostrarPalabraAdivinar = document.getElementById("palabra");
let categorias = ["coches", "ciudades", "paises", "comida"];
let palabras, palabraAleatoria, palabraAdivinar, palabraUsuario;
let intentos = 0;

String.prototype.capitalize = function () {
    return this.charAt(0).toUpperCase() + this.slice(1)
}

const inicio = () => {
    xhr.addEventListener("load", () => {
        let datos = JSON.parse(xhr.responseText)
        comenzarJuego(datos);
        pintarBotonesLetras();
    })
    xhr.open("GET", "datos.json");
    xhr.send();

    document.getElementById("imgAhorcado").src = `img/img0.png`;
    document.getElementById("intentos").innerHTML = 7;
    window.addEventListener("keyup", comprobarLetra);
}

const comenzarJuego = datosJuego => {
    let randomCategoria = Math.floor(Math.random() * datosJuego.categorias.length);
    let categoriaAleatoria = (datosJuego.categorias[randomCategoria].nombre).toLowerCase();

    let randomPalabra = Math.floor(Math.random() * datosJuego.categorias[randomCategoria].palabras.length);
    palabraAleatoria = (datosJuego.categorias[randomCategoria].palabras[randomPalabra]).toLowerCase();

    mostrarCategoria.innerHTML = categoriaAleatoria.capitalize();
    colocarPalabra(palabraAleatoria);
}

const colocarPalabra = palabra => {
    palabraAdivinar = palabra.split("");
    mostrarPalabraAdivinar.innerHTML = "";
    palabraAdivinar.forEach(letra => {
        mostrarPalabraAdivinar.innerHTML += `<div class="letras">_</div>`;
    });
}

const comprobarLetra = () => {
    let letra = "";
    if (event.type == "keyup") {
        letra = event.key.toLowerCase();
    } else if (event.type == "click") {
        letra = event.target.innerHTML.toLowerCase();
    }

    let palabaUsuario = "";
    if (intentos == 6) {
        document.getElementById("intentos").innerHTML = 0;
        juegoPerdido();
    } else {
        if (palabraAleatoria.indexOf(letra) != -1) {
            for (let index = 0; index < palabraAleatoria.length; index++) {
                if (palabraAleatoria[index] == letra) {
                    document.getElementsByClassName("letras")[index].innerHTML = letra;
                }
                palabaUsuario += document.getElementsByClassName("letras")[index].innerHTML;
            }
            if (palabaUsuario == palabraAleatoria) {
                juegoGanado();
            }
        } else {
            intentos++;
            let id = "btn" + letra.toUpperCase();
            document.getElementById(id).classList.remove("btn-info");
            document.getElementById(id).classList.add("btn-danger");
            document.getElementById("intentos").innerHTML = (7 - intentos);
            document.getElementById("imgAhorcado").src = `img/img${intentos}.png`;
        }
    }
}

const juegoPerdido = () => {
    intentos = 0;
    alert("No has acertado la palabra :(");
    document.getElementById("letrasElegir").innerHTML = `<button class="btn btn-success" onclick="inicio()"> Volver a jugar </button>`;
}

const juegoGanado = () => {
    intentos = 0;
    alert("Enhorabuena, has acertado!");
    document.getElementById("letrasElegir").innerHTML = `<button class="btn btn-success" onclick="inicio()"> Volver a jugar </button>`;
}

const pintarBotonesLetras = () => {
    let abecedario = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ".split("");
    let id = []
    document.getElementById("letrasElegir").innerHTML = "";
    abecedario.forEach(letra => {
        id.push("btn" + letra);
        let botones = document.createElement("button");
        botones.innerHTML = letra;
        botones.id = "btn" + letra;
        botones.classList.add("btn");
        botones.classList.add("btn-info");
        botones.classList.add("btnLetra");
        document.getElementById("letrasElegir").appendChild(botones);

        botones.addEventListener("click", comprobarLetra);
    });

}

inicio();