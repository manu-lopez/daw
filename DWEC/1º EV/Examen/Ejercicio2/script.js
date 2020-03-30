const alfabetos = ["Castellano", "Ingles"];
const letrasCastellano = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
const letrasIngles = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
const cantidadLetrasCastellano = letrasCastellano.length;
const cantidadLetrasIngles = letrasIngles.length;
let diccionarioAUsar = letrasCastellano;

let selectAlfabeto = document.getElementById("alfabeto");
let nivelRotado = document.getElementById("nivelRotado");

for (let index = 0; index < alfabetos.length; index++) {
  let optionAlfabetos = document.createElement("option");
  optionAlfabetos.value = alfabetos[index];
  optionAlfabetos.innerHTML = alfabetos[index];
  selectAlfabeto.appendChild(optionAlfabetos);
}

//Como castellano es por defecto, establecemos el maximo
nivelRotado.max = cantidadLetrasCastellano;

const cambioAlfabeto = (alfabeto) => {
  if (alfabeto.value == "Castellano") {
    nivelRotado.max = cantidadLetrasCastellano;
    diccionarioAUsar = letrasCastellano;
  }
  if (alfabeto.value == "Ingles") {
    nivelRotado.max = cantidadLetrasIngles;
    diccionarioAUsar = letrasIngles;
  }
}

const descifrarTexto = () => {
  let texto = document.getElementById("texto").value.toUpperCase();
  let mostrar = document.getElementById("textoDescifrado");
  let nivel = parseInt(nivelRotado.value);
  let nuevoTexto = "";

  for (let index = 0; index < texto.length; index++) {
    if (!/\W/.test(texto[index])) {
      posicionLetra = parseInt(diccionarioAUsar.indexOf(texto[index]));
      if (nivel > posicionLetra) {
        a = nivel - (posicionLetra);
        nuevaPosicion = (diccionarioAUsar.length - a);
      } else {
        nuevaPosicion = posicionLetra - nivel;
      }
      nuevoTexto += diccionarioAUsar[nuevaPosicion];
    } else {
      nuevoTexto += texto[index];
    }
  }
  mostrar.innerHTML = nuevoTexto;
}