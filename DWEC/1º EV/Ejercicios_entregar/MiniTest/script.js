let xhr = new XMLHttpRequest();
let preguntasMostrar = document.getElementById("preguntas");
let btnCorregir = document.getElementById("btnCorregir");
let intentos = 0;
let porcentajeAcertado = 0;
let preguntas, preguntasCheckbox, preguntasRadio, preguntasSelect, preguntasInput, correcta, btnReintentar, checkboxSeleccionados, radioSeleccionados, selectPreguntas, inputPregunta;

xhr.addEventListener("load", () => {
    preguntas = JSON.parse(xhr.responseText);


    generarPreguntasCheckbox(preguntas.checkbox);
    generarPreguntasRadio(preguntas.radio);
    generarPreguntasSelect(preguntas.select);
    generarPreguntasInput(preguntas.input);
    correcta = {
        "checkbox": preguntas.checkbox.correcta,
        "radio": preguntas.radio.correcta,
        "select": preguntas.select.correcta,
        "input": preguntas.input.correcta
    };
})
xhr.open("GET", "datos.json");
xhr.send();

const generarPreguntasCheckbox = preguntas => {

    let div = document.createElement("div");
    div.classList.add("preguntasCheckbox");
    preguntasMostrar.appendChild(div);

    let titulo = `<p>${preguntas.pregunta}</p>`;
    div.innerHTML += titulo;
    for (let respuestas = 0; respuestas < preguntas.respuestas.length; respuestas++) {
        let respuesta = `<input class="pcheckbox" type="checkbox" name="${respuestas+1}" value="${preguntas.respuestas[respuestas]}">${preguntas.respuestas[respuestas]}<br>`;
        div.innerHTML += respuesta;
    }
}

const generarPreguntasRadio = preguntas => {

    let div = document.createElement("div");
    div.classList.add("preguntasRadio");
    preguntasMostrar.appendChild(div);

    let titulo = `<p>${preguntas.pregunta}</p>`;
    div.innerHTML += titulo;
    for (let respuestas = 0; respuestas < preguntas.respuestas.length; respuestas++) {
        let respuesta = `<input class="pradio" type="radio" name="pradio" value="${respuestas+1}"${(respuestas==0)?'checked':""}>${preguntas.respuestas[respuestas]}<br>`;
        div.innerHTML += respuesta;
    }
}
const generarPreguntasSelect = preguntas => {

    let div = document.createElement("div");
    div.classList.add("preguntasSelect");
    preguntasMostrar.appendChild(div);

    let respuesta = `<select id="selectPreguntas">`;
    let titulo = `<p>${preguntas.pregunta}</p>`;

    div.innerHTML += titulo;

    for (let respuestas = 0; respuestas < preguntas.respuestas.length; respuestas++) {
        respuesta += `<option value="${respuestas+1}">${preguntas.respuestas[respuestas]}</option>`;
    }

    respuesta += `</select>`;
    div.innerHTML += respuesta;
}
const generarPreguntasInput = preguntas => {

    let div = document.createElement("div");
    div.classList.add("preguntaInput");
    preguntasMostrar.appendChild(div);

    let titulo = `<p>${preguntas.pregunta}</p>`;
    div.innerHTML += titulo;
    respuesta = `<input type="text" name="inputPregunta" id="inputPregunta">`;
    div.innerHTML += respuesta;
}

const corregirPreguntas = () => {

    //NOTE Obtengo respuestas de los checkbox
    checkboxSeleccionados = document.getElementsByClassName('pcheckbox');
    let idCheckboxSeleccionados = [];
    let checkboxCorrectos = correcta.checkbox.split(",");
    for (let index = 0; index < checkboxSeleccionados.length; index++) {
        if (checkboxSeleccionados[index].checked) {
            console.log(checkboxSeleccionados[index].name);
            idCheckboxSeleccionados.push(checkboxSeleccionados[index].name);
        }
    }

    (JSON.stringify(idCheckboxSeleccionados) == JSON.stringify(checkboxCorrectos)) ? porcentajeAcertado += 25: console.log("Incorrecto");

    //NOTE Obtengo respuestas de los Radio butotn
    radioSeleccionados = document.getElementsByClassName("pradio");
    for (let index = 0; index < radioSeleccionados.length; index++) {
        if (radioSeleccionados[index].checked) {
            idRadioSelecionado = radioSeleccionados[index].value;
        }
    }

    (idRadioSelecionado == correcta.radio) ? porcentajeAcertado += 25: console.log("Incorrecto");


    //NOTE Obtengo respuestas del select
    selectPreguntas = document.getElementById("selectPreguntas");
    // console.log(selectPreguntas.value);
    (selectPreguntas.value == correcta.select) ? porcentajeAcertado += 25: console.log("Incorrecto");


    //NOTE Obtengo respuestas del input
    inputPregunta = document.getElementById("inputPregunta");
    (inputPregunta.value.toLowerCase() == correcta.input) ? porcentajeAcertado += 25: console.log("Incorrecto");

    intentos += 1;
    document.getElementById("intentos").innerHTML = `Intentos: ${intentos}`;
    document.getElementById("aciertos").innerHTML = `Aciertos: ${porcentajeAcertado}%`;

    if (porcentajeAcertado == 100) {
        btnCorregir.disabled = true;
    } else {
        btnCorregir.innerHTML = "Reintentar";
        btnCorregir.removeEventListener("click", corregirPreguntas);
        btnCorregir.addEventListener("click", reintentarTest);
    }
}

const reintentarTest = () => {
    btnCorregir.innerHTML = "Corregir";

    //NOTE Deseleccionamos checkbox
    for (let index = 0; index < checkboxSeleccionados.length; index++) {
        checkboxSeleccionados[index].checked = false;
    }

    //NOTE Deseleccionamos radio
    for (let index = 0; index < radioSeleccionados.length; index++) {
        (radioSeleccionados[index].value == 1) ? radioSeleccionados[index].checked = true: radioSeleccionados[index].checked = false;
    }

    //NOTE Reseteamos select
    selectPreguntas.selectedIndex = 0;

    //NOTE Limpiamos input
    inputPregunta.value = "";

    btnCorregir.removeEventListener("click", reintentarTest);
    btnCorregir.addEventListener("click", corregirPreguntas);
    porcentajeAcertado = 0;
    document.getElementById("aciertos").innerHTML = `Aciertos: ${porcentajeAcertado}%`;
}

btnCorregir.addEventListener("click", corregirPreguntas);