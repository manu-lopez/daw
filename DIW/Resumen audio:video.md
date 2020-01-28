##Resumen Audio en la web



- Formatos

  ```
  El formato más conocido es el MP3, pero no quiere decir que sea el único, podemos encontrar formatos como:
  -	MP3 (Es propietario. Puede llegar a comprimir hasta en 11 veces el tamaño de su homónimo en CD)
  - Ogg (versión libre para competir con el MP3)
  - Real Audio (principalmente para streaming)
  - WMA (Desarrollado por Microsoft)
  - WAV (No tiene compresión)
  - VQF (Desarrollado por Yamaha, no ha tenido éxito aunque permita más calidad con menos tamaño comparado con el MP3)
  - FLAC (Gran calidad debido a que no se comprime y no tiene perdida de información)
  ```

  

- Compatibilidad según navegador

  ```
  HTML5 soporta MP3, WAV y OGG
  ```

  ![image-20200123124954573](/Users/manuellopezramos/Library/Application Support/typora-user-images/image-20200123124954573.png)

  

- Uso de HTML5

  ```html
  Con la llegada de HTML5, se incorporó la etiqueta <audio></audio>
  Ejemplo:
  <audio controls>
  	<source src="horse.ogg" type="audio/ogg">
    <source src="horse.mp3" type="audio/mpeg">
   Your browser does not support the audio element.
  </audio> 
  
  Esta etiqueta nos permite controlar el audio, silenciarlo, añadir reproductor.
    
  ```

  

## Resumen Video en la web



 - Formatos

   ```
   - AVI (Formato estandar, aunque no recomendado debido a su peso)
   - MPEG (Se le llama MP4. Admite distintos codecs de compresión)
   - MOV (Desarrollado por . Buena relación calidad/peso)
   - WMV (Desarrollado por Microsoft. Buena relacón calidad/peso)
   - RM (Desarrollado por Real Networks, usa codec propio)
   - OGG (Alternativa Open Source)
   - MKV (Alternativa Open Source, usada para distribución de peliculas)
   ```

   

 - Compatibildad según navegador

   ![image-20200123130845029](/Users/manuellopezramos/Library/Application Support/typora-user-images/image-20200123130845029.png)

   

 - Uso de HTML5

   ```html
   Con la llegada de HTML5, se incorporó la etiqueta <video></video>
   Ejemplo:
   <video width="320" height="240" autoplay>
     <source src="movie.mp4" type="video/mp4">
     <source src="movie.ogg" type="video/ogg">
   Your browser does not support the video tag.
   </video>  
   
   Esta etiqueta nos permite controlar el video, silenciarlo, añadir reproductor, autoplay (siempre que se encuentre silenciado).
   ```

   

