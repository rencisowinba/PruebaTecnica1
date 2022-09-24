<?php
/* WINBA - Prueba técnica fundamentos
   Ricardo Patricio Enciso Peña
   Desafío cuatro - Programa que indica la cantidad de veces que se repite una palabra en una cadena de caracteres dada

*/
    $frase = $_GET["Frase"]; // Se obtiene la frase que se evaluará y se asigna a la variable $frase
    $palabras = explode(' ',$frase); //Se realiza un array con las palabras que contiene la frase
    $palabrasUnic = array_unique($palabras); // Se obtiene un listado de las palabras unicas en un array
    $resultado=[]; //Se inicializa el array donde se almacenará el resultado

    foreach($palabrasUnic as $palabra){  //Se recorre el array con las palabras únicas 
        $contador=0;
        foreach($palabras as $cuenta){  //Se recorre el array con todas la palabras para comparar palabra por palabra y realizar la cueta de sus apariciones
            if($palabra === $cuenta) $contador++;
        }
        if($contador>1){   //Si la palabra aparece más de una vez entonces se agrega al array de resultados
            $resultado [] = 'La palabra "'.$palabra.'" se repite '.$contador.' veces';
        }
    }
    
    //A continuación se listan las palabras que se encuentran repetidas y la cantidad de veces que se repiten
    echo 'Listado de palabras que se repiten en la frase: <br><br>  "'.$frase.'"<br> <br>';
    foreach ($resultado as $listado) {
        echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$listado.'<br>'; 
    }
?>