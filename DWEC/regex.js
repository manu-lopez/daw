//
// ─── EXPRESIONES REGULARES ──────────────────────────────────────────────────────
//

let erStringNoVacio = /\w+/;
let erContrasenia = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
let erEmail = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;