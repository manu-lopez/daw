let numeroAletaorio;
let pnumeroacertar = document.getElementById("numeroacertar");
let resultado = document.getElementById("resultado");
let botonIniciar = document.getElementById("inicializarJuego");
let botonComprobar = document.getElementById("botonComprobar");
let limiteInferior = 1;
let limiteSuperior = 100;
let intentos = 0;



const comprobarNumero = numeroBoton => {
  intentos += 1;
  document.getElementById("intentos").innerHTML = `Intentos: ` + intentos;
  numeroUsuario = parseInt(numeroBoton);
  console.log(numeroUsuario);
  if (numeroUsuario == numeroAletaorio) {
    resultado.classList.remove("text-primary");
    resultado.classList.add("text-success");
    resultado.innerHTML = "¡Enhorabuena has acertado!";
    botonIniciar.style.visibility = "visible";
  } else {
    if (numeroUsuario < numeroAletaorio) {
      limiteInferior = (numeroUsuario + 1);
      resultado.innerHTML = "El número esta comprendido entre " + limiteInferior + " y " + limiteSuperior;
    } else {
      limiteSuperior = (numeroUsuario - 1);
      resultado.innerHTML = "El número esta comprendido entre " + limiteInferior + " y " + limiteSuperior;
    }
    desactivarBotones(limiteInferior, limiteSuperior);
  }
}

const desactivarBotones = (inferior, superior) => {
  for (let index = 1; index < inferior; index++) {
    document.getElementById("btn" + index).disabled = true;
  }
  for (let index = superior + 1; index <= 100; index++) {
    document.getElementById("btn" + index).disabled = true;
  }
}

const iniciarlizarJuego = () => {
  botonIniciar.style.visibility = "hidden";
  numeroAletaorio = Math.round(Math.random() * 100);
  resultado.innerHTML = "";
  resultado.classList.add("text-primary");
  // pnumeroacertar.innerHTML = numeroAletaorio;

  document.getElementById("botones").innerHTML = "";
  for (let index = 1; index <= 100; index++) {
    document.getElementById("botones").innerHTML += `<button id="btn${index}" class="btn btn-info" onclick="comprobarNumero(this.innerHTML)">${index}</button>`;
  }
  intentos = 0;
  document.getElementById("intentos").innerHTML = `Intentos: ` + intentos;
  limiteInferior = 1;
  limiteSuperior = 100;
}

iniciarlizarJuego();