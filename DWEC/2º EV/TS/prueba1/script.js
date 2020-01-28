"use strict";
var a = 5;
var isBool = false;
// Enums
var Color;
(function (Color) {
    Color[Color["Red"] = 0] = "Red";
    Color[Color["Green"] = 1] = "Green";
    Color[Color["Yellow"] = 2] = "Yellow";
    Color[Color["Purple"] = 3] = "Purple";
    Color[Color["Brown"] = 4] = "Brown";
    Color[Color["Black"] = 5] = "Black";
})(Color || (Color = {}));
;
// *** CLASES ***
// Definición de clase
var Animal = /** @class */ (function () {
    function Animal(nombre, edad, colorPiel) {
        this.nombre = nombre;
        this.edad = edad;
        this.colorPiel = colorPiel;
    }
    Animal.prototype.saludo = function () {
        return "Hola, " + this.nombre;
    };
    return Animal;
}());
var miGato = new Animal('Benito', 15, Color.Brown);
console.log(miGato.saludo());
