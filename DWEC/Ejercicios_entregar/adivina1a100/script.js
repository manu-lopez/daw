let numeroAletaorio = Math.round(Math.random() * 100);
let pnumeroacertar = document.getElementById("numeroacertar");
let limiteInferior = 1;
let limiteSuperior = 100;

pnumeroacertar.innerHTML = numeroAletaorio;

const comprobarNumero = () => {
  let numeroUsuario = parseInt(document.getElementById("numeroUsuario").value);
  let resultado = document.getElementById("resultado");
  if (numeroUsuario == numeroAletaorio) {
    resultado.innerHTML = "¡Enhorabuena has acertado!";
  } else {
    if (numeroUsuario < numeroAletaorio) {
      limiteInferior = (numeroUsuario + 1);
      resultado.innerHTML = "El número esta comprendido entre " + limiteInferior + " y " + limiteSuperior;
    } else {
      limiteSuperior = (numeroUsuario - 1);
      resultado.innerHTML = "El número esta comprendido entre " + limiteInferior + " y " + limiteSuperior;
    }
  }
}