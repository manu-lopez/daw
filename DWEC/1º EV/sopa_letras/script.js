/*
(fila, columna)
aprobar => (8,4)-(2,4)
apto => (6,4)-(9,1)
catear => (5,0)-(0,0)
cero => (5,0)-(5,3)
examen => (1,1)-(6,6)
nota => (6,6)-(9-6)
notable => (6,6)-(0,6)
test => (4,6)-(3,1)
*/
const letras = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
const cantidadLetras = letras.length;
let juego = document.getElementById("juego");
let palabras = ["aprobar", "apto", "catear", "cero", "examen", "nota", "notable", "test"];
let posiciones = [
  ["aprobar", "84,24"],
  ["apto", "64,91"],
  ["catear", "50,00"],
  ["cero", "50,53"],
  ["examen", "11,66"],
  ["nota", "66,96"],
  ["notable", "66,06"],
  ["test", "46,31"]
];

const idPulsado = boton => {
  console.log(boton.id);
}

for (let fila = 0; fila < 10; fila++) {
  for (let columna = 0; columna < 8; columna++) {
    // console.log(posiciones[fila][columna]);
    juego.innerHTML += `<button id="${fila}${columna}" onclick="idPulsado(this)">${letras[Math.floor(Math.random()*cantidadLetras)]}</button>`;
  }
  juego.innerHTML += "<br>"
}

for (let a = 0; a < posiciones.length; a++) {
  for (let b = 0; b < posiciones[a].length; b++) {
    for (let index = 0; index < posiciones[a][b].length; index++) {
      c1 = posiciones[a][1].split(",")[0];
      c2 = posiciones[a][1].split(",")[1];
      document.getElementById(c1).innerHTML = posiciones[a][0][0];
      document.getElementById(c2).innerHTML = posiciones[a][0][posiciones[a][0].length - 1];
      document.getElementById(c1).style.backgroundColor = "red";
      document.getElementById(c2).style.backgroundColor = "red";

    }
  }
}