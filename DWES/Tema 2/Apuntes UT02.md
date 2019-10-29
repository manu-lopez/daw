# DWES

## Apuntes UT02 

### Generación de código HTML

- Diferencias entre `echo` y `print`

> `print` solo puede recibir un parámetro y devuelve siempre 1

- Qué es `sprintf`?

> Función como printf pero guarda sálida en una variable.

### Cadenas de texto

- Comillas dobles vs simples

> Las comillas dobles muestran el contenido de la variable, las simples no.
>
> $nombre = "Manuel";
>
> echo "Hola $nombre"; => Hola Manuel.
>
> echo 'Hola $nombre'; => Hola \$nombre.

- Sintaxis heredoc

> Se pone operador '<<<' seguido del identificador y en la linea siguiente la cadena de texto sin comillas. La cadena finaliza al usar de nuevo el identificador en una nueva linea.
>
> ```php
> $cadenaTexto = <<<CADENA
> Lorem ipsum dolor sit amet, 
> consectetur adipisicing elit. Autem, 
> quidem.
> CADENA;
> ```
>
> El texto se procesa igual que una cadena entre comillas dobles, si no quieres que se realize ninguna sustitucion debes poner el identifiacodr entre comillas simples.
>
> ```php
> $cadenaTexto = <<<'CADENA'
> ....
> CADENA;
> ```
>
> De esta manera no se sustituyen variables ni secuencias de escape.

### Funciones relacionadas con los tipos de datos

- `isset`, `unset`, `null` y `empty`.

> `isset` -> Comprueba que la variable este definida.
>
> `unset`-> Destruye la variable pasada como parámetro.
>
> `null` -> Representa una variable sin valor.
>
> 	- se le ha asignado la constante **null**.   
> 	- no se le ha asignado un valor todavía.
> 	- se ha destruido con `unset()`.
>
> `empty`-> Determina si esta vacía. 
>
> - *"" (una cadena vacía)*
> - *0 (0 como un integer)*
> - *0.0 (0 como un float)*
> - *"0" (0 como un string)*
> - **null**
> - **FALSE**
> - *array() (un array vacío)*

- `define`

> Se usa para definir constantes.
>
> Solo se permite para `integer`, `float`, `string`, `boolean` y `null`

### Bucles

- `if`, `elseif`y `else` sin llaves.

> No es necesario usar llaves si se actua solo sobre una única sentencia.
>
> ```php
> if ($a < $b)
>   print "a es menor"
> else
>   print "a es mayor"
> ```

- **PECL**

> Es un repositorio de extenciones para PHP. 
>
> Con el comando `pecl`podemos instalar extensiones de forma sencilla.
>
> ```bash
> pecl install nombre_extension
> ```

### Inclusión de archivos

- `include`, `include_once`, `require`y `require_once`

> `include` -> Evalua el contenido del fichero y lo incluye en el punto donde se realiza la llamada. Si no encuentra el archivo, da un aviso y continua la ejecución.
>
> `include_once` -> Igual que `include`pero solo incluye aquellos ficheros que no han sido incluidos.
>
> `require` -> Si no encuentra el fichero, para la ejecución.
>
> `require_once` -> Asegura la inclusión del archivo y genera error si no está (para la ejecución).

### Argumentos

- Argumentos por referencia

> En una función puedes pasar el argumento **por valor.**
>
> ```php
> function añadirIva($precio){
>   return $precio * 1.21;
> }
> $precio = 5;
> $precioConIva = añadirIva($precio);
> echo "El precio con IVA es".$precioConIva;
> ```
>
> De esta manera, cualquier cambio que se haga dentro de la función a los valores de los argumentos, no se reflejará fuera de la función. Si quieres que esto ocurra, debes pasar el valor **por referencia**, para ello añadimos el símbolo `&`.
>
> ```php
> function añadirNumero(&$numero){
> 	return $precio * 1.21;
> }
> $precio = 5;
> añadirIva($precio);
> echo "El precio con IVA es".$precio;
> ```

### Array

- `print_r`

> Función que nos muestra todo el contenido del array que le pasemos

### Recorrer array

- `foreach`

> ```php
> foreach (expresión_array as $valor)
>     sentencias
> foreach (expresión_array as $clave => $valor)
>     sentencias
> ```

- Funciones recorrer arrays

> | Función   | Resultado                                                    |
> | --------- | ------------------------------------------------------------ |
> | `reset`   | Sitúa el puntero interno al comienzo del array.              |
> | `next`    | Avanza el puntero interno una posición.                      |
> | `prev`    | Mueve el puntero interno una posición hacia atrás.           |
> | `end`     | Sitúa el puntero interno al final del array.                 |
> | `current` | Devuelve el elemento de la posición actual.                  |
> | `key`     | Devuelve la clave de la posición actual.                     |
> | `each`    | Devuelve un array con la clave y el elemento de la posición actual. Además, avanza el puntero interno una posición. |
>
> Las funciones `reset`, `next`, `prev` y `end`, además de mover el puntero interno devuelven, al igual que `current`, **el valor del nuevo elemento** en que se posiciona. Si al mover el puntero te sales de los límites del array (por ejemplo, si ya estás en el último elemento y haces un `next`), cualquiera de ellas devuelve `false`. Sin embargo, al comprobar este valor devuelto no serás capaz de  distinguir si te has salido de los límites del array, o si estás en una  posición válida del array que contiene el valor "false".

### Funciones relacionadas con los tipos de datos compuestos

- Función `array`

> Nos permite crear un array en una sola linea.
>
> Si no se le indica el valor de la clave, crea un array númerico con base 0.
>
> Si no se le indican parametros, crea un array vacío.
>
> ```php
> $a = array();  // array vacío
> $modulos = array("A", "B", "C");   // array numérico
> ```

- `array_values`

> Se le pasa un array y te devuelve un nuevo array con los mismos elementos pero con **índices númericos consecutivos** con base 0.

- Buscar en un array

> `in_array` -> Recibe como parámetros el **elemento** a buscar y la **variable de tipo array** en la que buscar, y devuelve `true` si encontró el elemento o `false` en caso contrario.
>
> ```php
> $modulos = array("Programación", "Bases de datos", "Desarrollo web en entorno servidor");
> if (in_array("Bases de datos", $modulos)) printf "Existe el módulo de nombre ".$modulo;
> ```
>
> `array_search` -> como `in_array`pero devuelve la clave correspondiente o `false` si no lo encuentra.
>
> `array_key_exists` -> Busca clave en un array. Devuelve `true`o `false`.

### Generación de formularios web en PHP

- Validación de datos

> Tenemos que comprobar si tenemos todos los datos que pedimos y luego procesarlos. Una manera seria la siguiente
>
> ```php
> if (!empty($_POST['modulos']) && !empty($_POST['nombre'])) {
>  // Aquí se incluye el código a ejecutar cuando los datos son correctos
> }
> 
> else {
>  // Aquí generamos el formulario, indicando los datos incorrectos
>  //   y rellenando los valores correctamente introducidos
> }
> ```
>
> 
>
> Para que el usuario no pierda datos podemos hacer uso de `isset` en value.
>
> ```php
> Nombre del alumno:
>         <input type="text" name="nombre" value="<?php if (isset ($_POST['nombre'])) echo $_POST['nombre'];?>" />
> ```
>
> y checked:
>
> ```php
> <input type="checkbox" name="modulos[]" value="DWES"
>     <?php
>          if(in_array("DWES",$_POST['modulos']))
>               echo 'checked="checked"';
>     ?>
> />
> ```


