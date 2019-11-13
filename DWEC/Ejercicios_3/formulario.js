//Expresiones regulares
let erStringNoVacio = /\w+/;
let erEmail = /(\w+)@(\w+)\.(\w+)/;
let erContrasenia = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

const validation = (datos) => {
  let valido = false;
  // Errores
  let errorNombre = document.getElementById("errorNombre");
  let errorEmail = document.getElementById("errorEmail");
  let errorContrasenia = document.getElementById("errorContrasenia");

  //Datos de formulario
  let nombre = datos.nombre.value;
  let email = datos.email.value;
  let contrasenia = datos.contrasenia.value;
  let contraseniaRepetida = datos.contraseniaRepetida.value;
  let resultadoCaptcha = datos.resultadoCaptcha.value;
  //Números para suma del captcha
  let numero1 = Math.random() * 10;
  let numero2 = Math.random() * 10;

  //Controlamos nombre vacio
  if (!erStringNoVacio.test(nombre)) {
    errorNombre.style.visibility = "visible";
  } else {
    errorNombre.style.visibility = "collapse";
    // valido = true;
  }

  //Controlamos email correcto
  if (!erEmail.test(email)) {
    errorEmail.style.visibility = "visible";
  } else {
    errorEmail.style.visibility = "collapse";
    // valido = true;
  }

  //Controlamos contraseña
  if (!erContrasenia.test(contrasenia)) {
    errorContrasenia.style.visibility = "visible";
  } else {
    errorContrasenia.style.visibility = "collapse";
    // valido = true;
  }

  return valido;
}