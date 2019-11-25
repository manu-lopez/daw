let numeroAletaorio;
let pnumeroacertar = document.getElementById("numeroacertar");
let resultado = document.getElementById("resultado");
let botonIniciar = document.getElementById("inicializarJuego");
let botonComprobar = document.getElementById("botonComprobar");
let limiteInferior = 1;
let limiteSuperior = 100;



const comprobarNumero = () => {
  let numeroUsuario = parseInt(document.getElementById("numeroUsuario").value);
  if (numeroUsuario == numeroAletaorio) {
    resultado.classList.remove("text-info");
    resultado.classList.add("text-success");
    resultado.innerHTML = "¡Enhorabuena has acertado!";
    botonComprobar.disabled = true;
    botonIniciar.style.visibility = "visible";
  } else {
    if (numeroUsuario < numeroAletaorio) {
      limiteInferior = (numeroUsuario + 1);
      resultado.innerHTML = "El número esta comprendido entre " + limiteInferior + " y " + limiteSuperior;
    } else {
      resultado.innerHTML = "El número esta comprendido entre " + limiteInferior + " y " + limiteSuperior;
      limiteSuperior = (numeroUsuario - 1);
    }
  }
}

const iniciarlizarJuego = () => {
  botonIniciar.style.visibility = "hidden";
  numeroAletaorio = Math.round(Math.random() * 100);
  botonComprobar.disabled = false;
  resultado.innerHTML = "";
  resultado.classList.add("text-info");
  // pnumeroacertar.innerHTML = numeroAletaorio;
  limiteInferior = 1;
  limiteSuperior = 100;
}

iniciarlizarJuego();
// pnumeroacertar.innerHTML = numeroAletaorio;