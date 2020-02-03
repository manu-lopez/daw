let palabrasJSON = JSON.parse(palabras).sort();
let button = document.getElementById("button");
let vocales = new RegExp(/\b(?=\w*?a)(?=\w*?e)(?=\w*?i)(?=\w*?o)(?=\w*?u)[a-zA-Z]+\b/);

const mostrarInfo = () => {
    let contador = 0;

    //Contamos cantidad de palabras en diccionario.js
    let cantidadPalabras = palabrasJSON.length;


    // Contamos palabras con todas las vocales
    let palabrasCincoVocales = []
    palabrasJSON.forEach(palabra => {
        if (vocales.test(palabra)) {
            palabrasCincoVocales.push("\n" + palabra);
            contador++;
        }
    });


    alert(`Palabras totales: ${cantidadPalabras}. \nPalabras con vocales: ${contador}. \n${palabrasCincoVocales}`);
}

button.addEventListener("click", mostrarInfo);