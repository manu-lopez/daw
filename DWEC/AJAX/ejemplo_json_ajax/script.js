let datos;
let xhr = new XMLHttpRequest();
let nombreInstituto = document.getElementById("nombreInstituto");
let codigoInstituto = document.getElementById("codigoInstituto");
let tabla = document.getElementById("tabla");
let optionProfesores = document.getElementById("optionProfesores");
let gruposProfesor = document.getElementById("gruposProfesor");
const profesores = ["Juana", "Paco", "Ango", "Jose Antonio", "David", "Luis", "Manolo", "Ferando Pérez", "Fernando Vargas"];

xhr.addEventListener("load", () => {
  datos = JSON.parse(xhr.responseText);
  nombreInstituto.innerHTML = `Nombre: ${datos.nombre}`;
  codigoInstituto.innerHTML = `Codigo: ${datos.codigo}`;
  mostrarTabla(datos.grupos);
  rellenarSelect(profesores);
});
xhr.open("GET", "datos.json", true);
xhr.send();

const mostrarTabla = grupos => {
  for (let i = 0; i < grupos.length; i++) {
    tabla.innerHTML += `<tr><td>${grupos[i].grupo}</td><td>${grupos[i].profesores.join(" - ")}</td></tr>`;
  }
}

const rellenarSelect = (profesores) => {
  for (let index = 0; index < profesores.length; index++) {
    optionProfesores.innerHTML += `<option value="${profesores[index]}">${profesores[index]}</option>`;
  }
}

const buscarGruposProfesor = () => {
  let grupos = datos.grupos;
  let nombreProfesor = optionProfesores.value;

  for (let i = 0; i < grupos.length; i++) {
    for (let nombre = 0; nombre < grupos[i].profesores.length; nombre++) {
      if (grupos[i].profesores[nombre] == nombreProfesor) {
        gruposProfesor.innerHTML += `<p>${grupos[i].grupo}</p>`;
      }
    }
  }
}