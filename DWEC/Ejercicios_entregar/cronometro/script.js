let horasMinutosSegundos = document.getElementById("horasMinutosSegundos");
let milisegundos = document.getElementById("milisegundos");
let btnIniciar = document.getElementById("btnIniciar");
let btnParar = document.getElementById("btnParar");
let btnVuelta = document.getElementById("btnVuelta");
let comienzo, final, diferencia, tiempohms, tiempoms, repetirFuncion, btnReiniciar, btnContinuar;

const funcionamiento = () => {
  final = new Date();
  diferencia = new Date(final - comienzo);

  //Obtenemos la hora, los minutos y los segundos y lo formateamos
  tiempohms = `${(diferencia.getHours()-1<10)?`0`+(diferencia.getHours()-1):+diferencia.getHours()-1}:${(diferencia.getMinutes()<10)?`0`+diferencia.getMinutes():+diferencia.getMinutes()}:${(diferencia.getSeconds()<10)?`0`+diferencia.getSeconds():diferencia.getSeconds()}`;
  tiempoms = `.${diferencia.getMilliseconds()}`;

  horasMinutosSegundos.innerHTML = tiempohms;
  milisegundos.innerHTML = tiempoms;
  repetirFuncion = setTimeout(funcionamiento, 10);
}

const iniciarCronometro = () => {
  comienzo = new Date();
  funcionamiento();
  btnParar.disabled = false;
}

const pararCronometro = () => {
  //Paramos funcionamiento()
  clearTimeout(repetirFuncion);

  //Cambiamos el boton parar por reinciar
  btnParar.removeEventListener("click", pararCronometro);
  btnParar.innerHTML = "Reiniciar";
  btnParar.id = "btnReiniciar";
  btnReiniciar = document.getElementById("btnReiniciar");
  btnReiniciar.addEventListener("click", reiniciarCronometro);

  //Cambiamos boton iniciar por continuar
  btnIniciar.removeEventListener("click", iniciarCronometro);
  btnIniciar.innerHTML = "Continuar";
  btnIniciar.id = "btnContinuar";
  btnContinuar = document.getElementById("btnContinuar");
  btnContinuar.addEventListener("click", continuarCronometro);
}

const reiniciarCronometro = () => {
  //Cambiamos boton Reiniciar por Parar
  horasMinutosSegundos.innerHTML = "00:00:00";
  milisegundos.innerHTML = ".000"
  btnReiniciar.removeEventListener("click", reiniciarCronometro);
  btnParar.innerHTML = "Parar";
  btnReiniciar.id = "btnParar";
  btnParar.addEventListener("click", pararCronometro);

  //Cambiamos boton continuar por iniciar
  btnContinuar.removeEventListener("click", continuarCronometro);
  btnContinuar.innerHTML = "Iniciar";
  btnContinuar.id = "btnIniciar"
  btnIniciar.addEventListener("click", iniciarCronometro);
}

const continuarCronometro = () => {
  //Tomamos el tiempo ya recorrido y lo establecemos como comienzo para cuando continuemos
  comienzo = new Date() - diferencia;
  comienzo = new Date(comienzo);

  //Cambiamos boton continuar por iniciar
  btnContinuar.removeEventListener("click", continuarCronometro);
  btnContinuar.innerHTML = "Iniciar";
  btnContinuar.id = "btnIniciar"
  btnIniciar.addEventListener("click", iniciarCronometro);

  //Cambiamos boton Reiniciar por Parar
  btnReiniciar.removeEventListener("click", reiniciarCronometro)
  btnReiniciar.id = "btnParar";
  btnParar.innerHTML = "Parar";
  btnParar.addEventListener("click", pararCronometro);
  funcionamiento();
}

const vueltaTiempo = () => {
  //FALTA POR IMPLEMENTAR
  console.log(tiempohms + tiempoms);
}

btnIniciar.addEventListener("click", iniciarCronometro);
btnParar.addEventListener("click", pararCronometro);
btnVuelta.addEventListener("click", vueltaTiempo);