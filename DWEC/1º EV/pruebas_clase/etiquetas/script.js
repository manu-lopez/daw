/*
TODOLIST
  X Controlar cantidad iteraciones restantes al acertar boton
  X Añadir variables aciertos y fallos
*/

var tags = JSON.parse(`[{
            "etiqueta": "b",
            "definicion": "Define texto en negrita"
          }, {
            "etiqueta": "link",
            "definicion": "Define la relaci\u00f3 entre un documento y un recurso externo (generalmente con hojas de estilo)"
          }, {
            "etiqueta": "ruby",
            "definicion": "Define una notacion de ruby"
          }, {
            "etiqueta": "s",
            "definicion": "Define texto que no es correcto"
          }, {
            "etiqueta": "sub",
            "definicion": "Define un texto que es sub\u00edndice"
          }]`).map(function (elemento) {
  return {
    etiqueta: elemento.etiqueta,
    definicion: elemento.definicion,
    mostrada: false
  };
});;

//VARIABLES
var totalTags = tags.length;

// Add buttons
for (let i = 0; i < totalTags; i++) {
  document.getElementById("buttonList").innerHTML += `<button id="${tags[i].etiqueta}" onclick="Check(this.id)"> ${tags[i].etiqueta} </button>`;
}

// Add definition
function getQuestion() {
  do {
    var randomNumber = Math.floor(Math.random() * totalTags);
    var selectedTag = tags[randomNumber];
    document.getElementById("definition").innerHTML = `<br><p id="definicion" class="${selectedTag.etiqueta}">${selectedTag.definicion}</p>`;
  } while (selectedTag.mostrada);
  selectedTag.mostrada = true;
}

function Check(buttonId) {
  definitionId = document.getElementById("definicion").className;
  console.log(`buttonId ${buttonId} || definitionId ${definitionId}`);

  if (buttonId == definitionId) {
    document.getElementById(buttonId).disabled = true;
    getQuestion();
  }
}

getQuestion();
