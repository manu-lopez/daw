//NOTE Constante con fecha actual
const fechaActual = new Date();

//NOTE Función prototype en Date, para obtener el dia de la semana con formato indiciado
Date.prototype.obtenerDiaLetra = function () {
    dias = ["L", "M", "X", "J", "V", "S", "D"];
    return dias[this.getDay() - 1];
}

Date.prototype.obtenerDiaCastellano = function () {
    dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado", "Domingo"];
    return dias[this.getDay() - 1];
}

Date.prototype.obtenerFecha = function () {
    let fecha = this.getFullYear() + "-" + (this.getMonth() + 1) + "-" + this.getDate();
    return fecha;
}

//NOTE Función para logearse los profesores, toma los datos del formulario, los envia mediante POST
//En caso exitoso muestra las clases de ese profesor a través de la funcion obtenerClases y en caso contrario
//avisa de que no ha conectado
const Login = () => {
    let xhr = new XMLHttpRequest();
    xhr.addEventListener("load", () => {
        //NOTE Controlamos que el profesor introducido existe
        if (xhr.responseText == "[]") {
            //console.log("No existe");
            alert("Usuario o password desconocidos");
        } else {
            let datos = JSON.parse(xhr.responseText);
            //NOTE Pasamos a la función obtener clase, el codigo del profesor y el dia
            obtenerClases(datos[0].codigo, fechaActual.obtenerDiaLetra());
            document.getElementById("textoDiaProfesor").innerHTML = "Lista de clase de los " + fechaActual.obtenerDiaCastellano() + " de " + datos[0].nombre;
        }
    });
    xhr.open("POST", "servidor/login.php");
    let formulario = document.getElementById("formulario");
    xhr.send(new FormData(formulario));
}


//NOTE La función recibe el id del profesor y el dia.
// Si el profesor tiene clases, forma la tabla con la funcion mostrarAlumnos
// en caso contrario muestra que no tiene clases.
const obtenerClases = (profesor, dia) => {
    let xhr = new XMLHttpRequest();
    xhr.addEventListener("load", () => {
        let datos = JSON.parse(xhr.responseText);
        if (datos.length == 0) {
            document.getElementById("tablaClases").innerHTML = `<p style="color:red">¡¡USTED NO TIENE CLASES HOY!!<p>`;
        } else {
            mostrarAlumnos(datos);
        }
    });
    xhr.open("GET", "servidor/lista.php?profesor=" + profesor + "&dia=" + dia);
    xhr.send();
}

//NOTE Obtiene objeto clases y dibuja la tabla
const mostrarAlumnos = clases => {
    let table = `<table border="1"><tr><th>Nombre</th><th>Instrumento</th><th>Hora</th><th>Falta</th></tr>`;
    let claseAnterior = clases[0].hora;
    clases.forEach(clase => {
        if (claseAnterior == clase.hora) {
            table += `<tr onmouseover="trOver(this, ${clase.telefono})" onmouseout="trOut(this)"><td>${clase.nombre}</td><td>${clase.instrumento}</td><td>${clase.hora}</td><td><button onclick='aniadirFalta("${clase.id}", "${clase.hora}")'>Falta</button></td></tr>`;
        } else {
            table += `<tr><td colspan="4">${'&nbsp'}</td></tr>`;
            table += `<tr onmouseover="trOver(this, ${clase.telefono})" onmouseout="trOut(this)"><td>${clase.nombre}</td><td>${clase.instrumento}</td><td>${clase.hora}</td><td><button onclick='aniadirFalta("${clase.id}", "${clase.hora}")'>Falta</button></td></tr>`;
        }
        claseAnterior = clase.hora;
    });
    document.getElementById("tablaClases").innerHTML = table;
}

/* ------------------------------------------------------------------------------------ */
/*                                       Mejora 1                                       */
/* ------------------------------------------------------------------------------------ */

//NOTE Tanto tdOver como tdOut pintan la fila al pasar el cursos, además muestra
//u oculta el teléfono
const trOver = (tr, telefono) => {
    document.getElementById("telefonoAlumno").innerHTML = `<p style="color:blue">Teléfono: ${telefono}<p>`;
    tr.style.backgroundColor = "cyan";
}
const trOut = tr => {
    document.getElementById("telefonoAlumno").innerHTML = "";
    tr.style.backgroundColor = "white";
}

/* ------------------------------------------------------------------------------------ */
/*                                       Mejora 2                                       */
/* ------------------------------------------------------------------------------------ */

//NOTE Se le pasa a la función el id del alumno y la hora, obtenemos la fecha actual y añadimos
//la falta mediante POST
const aniadirFalta = (alumno, hora) => {
    let fecha = fechaActual.obtenerFecha();

    let xhr = new XMLHttpRequest();
    xhr.addEventListener("load", () => {
        if (xhr.responseText == "ok") {
            alert("Se ha añadido la falta");
        } else {
            alert("Este alumno ya tiene la falta puesta.");
        }
    });
    xhr.open("POST", "servidor/falta.php");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("alumno=" + alumno + "&fecha=" + fecha + "&hora=" + hora);
}