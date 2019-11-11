datos = [{
    "partido": "PSOE",
    "escanios": 120,
    "votos": 6752983,
    "porcentaje": 28,
    "color": "#ed1c24"
  },
  {
    "partido": "PP",
    "escanios": 88,
    "votos": 5019869,
    "porcentaje": 20.82,
    "color": "#0055a7"
  },
  {
    "partido": "Cs",
    "escanios": 10,
    "votos": 1637540,
    "porcentaje": 6.79,
    "color": "#fa5000"
  },
  {
    "partido": "PODEMOS-IU",
    "escanios": 35,
    "votos": 3097185,
    "porcentaje": 12.84,
    "color": "#6a2e68"
  },
  {
    "partido": "VOX",
    "escanios": 52,
    "votos": 3640063,
    "porcentaje": 15.09,
    "color": "#66bc29"
  },
  {
    "partido": "ERC-SOBIRANISTES",
    "escanios": 13,
    "votos": 869934,
    "porcentaje": 3.61,
    "color": "#f3b217"
  },
  {
    "partido": "JxCAT-JUNTS",
    "escanios": 8,
    "votos": 527375,
    "porcentaje": 2.19,
    "color": "#c40048"

  },
  {
    "partido": "PNV",
    "escanios": 7,
    "votos": 377423,
    "porcentaje": 1.57,
    "color": "#009526"
  },
  {
    "partido": "EH Bildu",
    "escanios": 5,
    "votos": 276519,
    "porcentaje": 1.15,
    "color": "#92aa34"
  },
  {
    "partido": "CUP-PR",
    "escanios": 2,
    "votos": 244754,
    "porcentaje": 1.01,
    "color": "#fff200"
  },
  {
    "partido": "MÁS PAÍS",
    "escanios": 3,
    "votos": 554066,
    "porcentaje": 2.3,
    "color": "#0fddc4"
  },
  {
    "partido": "NA+",
    "escanios": 2,
    "votos": 98448,
    "porcentaje": 0.41,
    "color": "#e51c13"
  },
  {
    "partido": "CCa-PNC-NC",
    "escanios": 2,
    "votos": 123981,
    "porcentaje": 0.51,
    "color": "#ffda1a"
  },
  {
    "partido": "BNG",
    "escanios": 1,
    "votos": 119597,
    "porcentaje": 0.5,
    "color": "#76aad0"
  },
  {
    "partido": "PRC",
    "escanios": 1,
    "votos": 68580,
    "porcentaje": 0.28,
    "color": "#00c6a4"
  },
  {
    "partido": "¡TERUEL EXISTE!",
    "escanios": 1,
    "votos": 19696,
    "porcentaje": 0.08,
    "color": "#037252"
  }
];

//Constante con datos ordenados por escaños los datos
const datosPorEscanios = datos.sort((a, b) => (a.escanios < b.escanios) ? 1 : -1);
const mayoriaAbsoluta = 176;
let barra = document.getElementById("barra");
let escanios = 0;

const mostrar = (input, posicion) => {
  let mayoria = document.getElementById("mayoria");

  //Si esta seleccionado "pintamos" la barra y sumamos escaños, si no la eliminamos mediante el id
  if (input.checked) {
    this.barra.innerHTML += `<div id="${input.id}_barra" style="width: ${datosPorEscanios[posicion].escanios}px; height: 100%; background-color: ${datosPorEscanios[posicion].color};"></div>`;

    //Sumamos escaños y controlamos si es mayoria o no poniendo en rojo o verde
    escanios += datosPorEscanios[posicion].escanios;
    mayoria.innerHTML = escanios;
    (escanios < mayoriaAbsoluta) ? mayoria.style.color = "red": mayoria.style.color = "green";
  } else {
    document.getElementById(input.id + "_barra").remove();

    //Restamos escaños y controlamos si es mayoria o no poniendo en rojo o verde
    escanios -= datosPorEscanios[posicion].escanios;
    mayoria.innerHTML = escanios;
    (escanios < mayoriaAbsoluta) ? mayoria.style.color = "red": mayoria.style.color = "green";
  }
};

const borrarSeleccion = () => {
  var inputs = document.getElementsByTagName("input");

  //deseleccionamos los checkbox
  for (const checkbox of inputs) {
    checkbox.checked = false;
  }
  //borramos contenido barra
  this.barra.innerHTML = "";

  //eliminamos escaños y los ponemos a 0
  mayoria.innerHTML = "";
  escanios = 0;
};

window.onload = function () {
  let tabla = document.getElementById("resultados");

  //Creamos la tabla
  for (let index = 0; index < datosPorEscanios.length; index++) {
    var row = tabla.insertRow(index + 1);
    var cell0 = row.insertCell(0);
    cell0.innerHTML = `<input onclick="mostrar(this, ${index})" type="checkbox" id="${datosPorEscanios[index].partido}" value="${datosPorEscanios[index].partido}">`;
    var cell1 = row.insertCell(1);
    cell1.style.backgroundColor = datosPorEscanios[index].color;
    var cell2 = row.insertCell(2);
    cell2.innerHTML = datosPorEscanios[index].partido;
    var cell3 = row.insertCell(3);
    cell3.innerHTML = datosPorEscanios[index].escanios;
    var cell4 = row.insertCell(4);
    cell4.innerHTML = datosPorEscanios[index].votos;
    var cell5 = row.insertCell(5);
    cell5.innerHTML = datosPorEscanios[index].porcentaje;
  }

};