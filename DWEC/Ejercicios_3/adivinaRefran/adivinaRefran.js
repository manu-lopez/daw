/* ------------------------------------------------------------------------------------ */
/*                  Declaraciones de variables y constantes necesarias                  */
/* ------------------------------------------------------------------------------------ */
const refranes = ["Este es el primer refran", "Ande yo caliente, riase la gente", "En casa de herrero, cuchara de palo"];
// const refranes = ["Este"];
let juego = document.getElementById("juego");
const refranElegido = Array.from(refranes[Math.floor(Math.random() * (refranes.length))]);
const longitudRefran = refranElegido.length;
let arrayNumeros = [];
let intervalo;


/* ------------------------------------------------------------------------------------ */
/*      Bucle para rellenar array con posiciones de las letras y crear los botones      */
/* ------------------------------------------------------------------------------------ */
for (let index = 0; index < longitudRefran; index++) {
  arrayNumeros.push(index);
  (!/\s/.test(refranElegido[index])) ? juego.innerHTML += `<button id="btn${index}">&nbsp</button>`: juego.innerHTML += "&nbsp";
}

/* ---------------------------- Funcion para mostrar letras --------------------------- */
/*            La idea es usar el array con las posiciones, se van obteniendo            */
/*                     de manera aleatoria y se elimina esa posicion                    */
/* ------------------------------------------------------------------------------------ */
const mostrarLetras = () => {
  indiceAleatorio = Math.floor(Math.random() * arrayNumeros.length)
  posicionLetraRefran = arrayNumeros[indiceAleatorio];
  document.getElementById(`btn${posicionLetraRefran}`).innerHTML = refranElegido[posicionLetraRefran];
  arrayNumeros.splice(indiceAleatorio, 1);
}


const comenzarContador = () => {
  intervalo = setInterval(mostrarLetras, 2000);
}

const pararContador = () => {
  clearInterval(intervalo);
  console.log("He parado");
}