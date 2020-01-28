let a: Number = 5;
let isBool: Boolean = false;

// Enums
enum Color { Red, Green, Yellow, Purple, Brown, Black };

// *** CLASES ***
// Definición de clase
class Animal {
    readonly nombre: string;
    private edad: number;
    public colorPiel: Color;
    constructor(nombre: string, edad: number, colorPiel: Color) {
        this.nombre = nombre; this.edad = edad; this.colorPiel = colorPiel;
    }
    saludo(): string {
        return `Hola, ${this.nombre}`;
    }
}
let miGato = new Animal('Benito', 15, Color.Brown);
console.log(miGato.saludo());