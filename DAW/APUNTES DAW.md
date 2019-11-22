# APUNTES DAW 

**Cuales son los principales archivos de configuración de  Apache?**

> httpd.conf y httpd-ssl.conf

**Como se estructura Apache?**

> Se estructura mediante módulos.

**Como se clasifican los módulos de Apache?**

> 1º Modulos Base: Funciones básicas de Apache
>
> 2º Módulos Multiproceso: Responsables de la unión con los puertos de la máquina, aceptan y envian peticiones.
>
> 3º Modulos Adicionales: Cualquier otro que le añada funcionalidad.

**Donde se encuentran los servidores virtuales de Apache?**

> En el archivo httpd.conf

**Se ha mejorado el rendimiento de Apache, gracias a que se ha diseñado varios módulos multiprocesos para cada uno de los sistemas operativos?**

> Verdadero

**Que ocurre si al servidor virtual le falta algún parámetro?**

> Lo toma de la configuración del servidor normal

**AllowOverride nos permite controlar el acceso a los archivos del servidor?**

> Verdadero
>
> *lo normal es que este como ``none``, y no deje acceder

**Que propiedad de ``httpd.conf`` cambiamos para cambiar directorio de los archivos a alojar en nuestro servidor?**

> ``DocumentRoot`` "ruta_de_carpeta"
>
> ``<Directory`` "ruta_de_carpeta">

**Que modulo tenemos que cambiar si queremos que nuestro apache arranque con ``patata.php``**

> Debemos modificar ``DirectoryIndex``, que se encuentra en ``<IfModule dir_module>``

**Como podemos prevenir  que terceros accedan a los archivos .htaccess o .htpasswd?**

> <Files ".ht*">
>
> ​	Require all denied
>
> </Files>

**Con que otro nombre se conoce al fichero .htaccess?**

> Archivo de configuración distribuida.

**El fichero .htaccess nos permite definir diferentes directivas de configuración para cada directorio, sin modificar el archivo principal de configuración de apache?**

> Verdadero

**El puerto de Oracle BBDD es el 1670**

> Falso

 **IANA significa Internet Assigned Number Authority**

> Falso (Es Numbers, no Number)