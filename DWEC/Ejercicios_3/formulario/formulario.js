//Expresiones regulares
let erStringNoVacio = /\w+/;
let erEmail = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
let erContrasenia = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
let antiBots = document.getElementById("antiBots");
let resultado;

const generarCaptcha = () => {
  //Números para suma del captcha
  let numero1 = Math.round(Math.random() * 10);
  let numero2 = Math.round(Math.random() * 10);
  resultado = numero1 + numero2;
  return `${numero1} + ${numero2} =`;
}

antiBots.innerHTML = generarCaptcha();

//Funcion para activar boton si se aceptan condiciones
const comprobarCondiciones = (checkbox) => {
  if (checkbox.checked) {
    document.getElementById("submitButton").disabled = false;
  } else {
    document.getElementById("submitButton").disabled = true;
  }
}


const validation = (datos) => {
  let valido = false;

  // Errores
  let errorNombre = document.getElementById("errorNombre");
  let errorEmail = document.getElementById("errorEmail");
  let errorContrasenia = document.getElementById("errorContrasenia");
  let errorContraseniaRepetida = document.getElementById("errorContraseniaRepetida");
  let errorAntiBots = document.getElementById("errorAntiBots");

  //Datos de formulario
  let nombre = datos.nombre.value;
  let email = datos.email.value;
  let contrasenia = datos.contrasenia.value;
  let contraseniaRepetida = datos.contraseniaRepetida.value;
  let resultadoAntiBots = datos.resultadoAntiBots.value;

  //Controlamos nombre vacio
  if (!erStringNoVacio.test(nombre)) {
    datos.nombre.focus();
    errorNombre.style.visibility = "visible";
    valido = false;
  } else {
    errorNombre.style.visibility = "collapse";
    valido = true;
  }

  //Controlamos email correcto
  if (!erEmail.test(email)) {
    datos.email.focus();
    errorEmail.style.visibility = "visible";
    valido = false;
  } else {
    errorEmail.style.visibility = "collapse";
    valido = true;
  }

  //Controlamos contraseña
  if (!erContrasenia.test(contrasenia)) {
    datos.contrasenia.focus();
    errorContrasenia.style.visibility = "visible";
  } else {
    errorContrasenia.style.visibility = "collapse";
    if (contraseniaRepetida == contrasenia) {
      errorContraseniaRepetida.style.visibility = "collapse";
      valido = true;
    } else {
      datos.contraseniaRepetida.focus();
      errorContraseniaRepetida.style.visibility = "visible";
      valido = false;
    }
  }

  //Controlamos antibots
  if (resultadoAntiBots == resultado) {
    errorAntiBots.style.visibility = "collapse";
    valido = true;
  } else {
    errorAntiBots.style.visibility = "visible";
    valido = false;
  }
  return valido;
}