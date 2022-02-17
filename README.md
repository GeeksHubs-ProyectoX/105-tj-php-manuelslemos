<p align="center">
    <img src="https://github.com/GeeksHubsAcademy/2020-geekshubs-media/blob/master/image/logo.png" >	
</p>

    Considere el siguiente problema:

    Escriba un programa corto de una sola línea permita filtrar todos los elementos de una array sin posibles repeticiones.
    
     N = 4 
    
         [7, 7, 7, 8]

     Resultado
	 
         [7,8]


    Observe el orden del elemento repetido. Éste debe de estar en el orden correcto.
    Atienda a números, letras y palabras.
    
    El resultado debe ser un array con los elementos no repetidos.
    
    
    Se atiente al siguiente ejemplo:
   
    N = 1          N = 2          N = 3          N = 4               N = 5
      
        [6]        [6, 6]         [6, 6, 9]      [6, 6, 9, 'a']      [6, 6, 9, 'a', 'a']        
                 
    Resultado:
 
	    [6]	       [6]	      [6, 9]         [6, 9, 'a']         [6, 9, 'a']      
                                  
    
    En la carpeta 'src/Repetidos.php' se encuentra el fichero con la definición de nuestro método vacío.
    En la carpeta 'test/RepetidosTest.php' se encuentra el fichero con la suite de test.
    
    El modus operandi de trabajo es el siguiente:
    
    Debes 'forkear' el proyecto a tu cuenta.
    Puedes hacer PR's ilimitadas e ir validando poco a poco la solución contra nuestro respositorio con CI.
    Puedes trabajar en local y subir la solución haciendo un PR a nuestro repositorio.
    Cuando se envíe la PR final, debes indicar el tiempo de dedicación y los intentos que has hecho.
    También puedes añadir un comentario para dar cualquier tipo de feedback.
    
    En caso de duda, revisa en el apartado de 'Referencias'.

    Runtime:       PHP 7.2
    Configuration: ./104-tj-php/phpunit.xml

    Time: 00:00.247, Memory: 2.80 MB

    ............                                                    12 / 12 (100%)
   
    OK (12 tests, 12 assertions)
    Process finished with exit code 0



## Referencias

* [Tutorial - Testing Automatizado](https://github.com/GeeksHubsAcademy/2020-js-vanilla-testing-FFFF/blob/master/README.md)
