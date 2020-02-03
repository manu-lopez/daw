let palabrasJSON = JSON.parse(palabras);
let button = document.getElementById("button");
let vocales = new RegExp(/\b(?=\w*?a)(?=\w*?e)(?=\w*?i)(?=\w*?o)(?=\w*?u)[a-zA-Z]+\b/);

const mostrarInfo = () => {
    let contador = 0;

    //Contamos cantidad de palabras en diccionario.js
    let cantidadPalabras = palabrasJSON.length;

    // Contamos palabras con todas las vocales
    palabrasJSON.forEach(palabra => {
        if (vocales.test(palabra)) {
            contador++;
        }
    });

    alert(`Palabras totales: ${cantidadPalabras}. \nPalabras con vocales: ${contador}.`);
}

button.addEventListener("click", mostrarInfo);