let erContrasenia = /^(?=.*[\w])(?=.*\d)[\w\d\_]{5,12}$/;
let erEmail = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
let emailValido = false;
let passwordValido = false;
let provinciaValida = false;
let fechaValida = false;


const datosProvincias = JSON.parse(provincias).sort();
const meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

let date = new Date();
const anioActual = date.getFullYear();
const anio = [];

for (let index = 1900; index <= anioActual; index++) {
  anio.push(index);
}

let selectProvincia = document.getElementById("selectProvincia");
let selectDia = document.getElementById("selectDia");
let selectMes = document.getElementById("selectMes");
let selectAnio = document.getElementById("selectAnio");

//Rellenamos los select
//Provincia
for (let index = 0; index < datosProvincias.length; index++) {
  let optionProvincia = document.createElement("option");
  optionProvincia.value = index;
  optionProvincia.innerHTML = datosProvincias[index];
  selectProvincia.appendChild(optionProvincia);
}

//dia
for (let index = 1; index <= 31; index++) {
  let optionDia = document.createElement("option");
  optionDia.innerHTML = index;
  selectDia.appendChild(optionDia);
}

//Mes
for (let index = 0; index < meses.length; index++) {
  let optionMes = document.createElement("option");
  optionMes.innerHTML = meses[index];
  selectMes.appendChild(optionMes);
}

//Año
for (let index = 0; index < anio.length; index++) {
  let optionAnio = document.createElement("option");
  optionAnio.innerHTML = anio[index];
  selectAnio.appendChild(optionAnio);
}

//Funcion para activar boton si se aceptan condiciones
const comprobarCondiciones = (checkbox) => {
  if (checkbox.checked) {
    document.getElementById("submitButton").disabled = false;
  } else {
    document.getElementById("submitButton").disabled = true;
  }
}

//Funcion validad fecha
const esBisiesto = (anio) => {
  let esBisiesto = false;

  if ((anio % 4 == 0) && (anio % 100 != 0) || (anio % 400 == 0)) {
    esBisiesto = true
  }

  return esBisiesto;
}

//Errores
let errorEmail = document.getElementById("errorEmail");
let errorPassword = document.getElementById("errorPassword");
let errorProvincia = document.getElementById("errorProvincia");
let errorFecha = document.getElementById("errorFechaNacimiento");

//Funcion validar formulario
const validarFormulario = formulario => {
  let formularioValido = false;

  //Validamos email
  if (erEmail.test(formulario.email.value)) {
    errorEmail.style.visibility = "hidden";
    emailValido = true;
  } else {
    errorEmail.style.visibility = "visible";
    emailValido = false;
  }

  //Validamos contraseña
  if (erContrasenia.test(formulario.password.value)) {
    errorPassword.style.visibility = "hidden";
    passwordValido = true;
  } else {
    errorPassword.style.visibility = "visible";
    passwordValido = false;
  }

  //Validamos provincia
  if (formulario.selectProvincia.value == "default") {
    errorProvincia.style.visibility = "visible";
    provinciaValida = false;
  } else {
    errorProvincia.style.visibility = "hidden";
    provinciaValida = true;
  }

  //Fecha
  if (formulario.selectMes.value == "Febrero") {
    if (esBisiesto(formulario.selectAnio.value) && (formulario.selectDia.value <= 29)) {
      errorFecha.style.visibility = "hidden";
      fechaValida = true;
    } else if ((formulario.selectDia.value <= 28)) {
      errorFecha.style.visibility = "hidden";
      fechaValida = true;
    } else {
      errorFecha.style.visibility = "visible";
      fechaValida = false;
    }
  } else {
    errorFecha.style.visibility = "hidden";
    fechaValida = true;
  }

  if (emailValido == true && passwordValido == true && provinciaValida == true && fechaValida == true) {
    console.log("VALIDO");
    formularioValido = true;
  }

  return formularioValido;
}