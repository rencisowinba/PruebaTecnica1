<?php
/* WINBA - Prueba técnica fundamentos
   Ricardo Patricio Enciso Peña
   Desafío dos - Programa que lista los números primos en un rango dado
*/


    $inicia = $_GET["IniciaRango"];  // Se obtiene el valor inicial del rango de números a validar
    $finaliza = $_GET["FinalizaRango"]; //Se obtiene el valor final del rango de números a validar
    
    $rangoDePrimos = []; // Se declara e inicializa la variable dónde se almacenaran los números primos encontrados

    for($i=$inicia; $i <= $finaliza; $i++) {  //En este ciclo se recorre cada número que compone el rango a evaluar
      $esPrimo=true;    // Se inicializa la variable que indicará si es o no primo el número evaluda
      for($j=2; $j<$i; $j++){  //En este ciclo se valida si es o no primo obteniendo los reciduos de las divisiones entre el número evaludo y cada número desde el dos hasta el número evaluado
        if($i%$j==0){ //Si dentro de la evaluación se registra un reciduo igual a cero singnifica que es un número divisible entre algún otro número y por tanto no es primo
          $esPrimo =false;
        }
      }
      if ($esPrimo) { //Si después de la evaluación se confirma que el número evaluado es un número primo entonces se registra en el array de resultados
        $rangoDePrimos[]=$i;    
      }
    }
    
    //A continuación se listan los números primos encontrados en el rango dado
    echo 'Listado de números primos en el rango del: '.$inicia.' al '.$finaliza.' <br> <br>';
    foreach ($rangoDePrimos as $numero) {
        echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$numero.'<br>'; 
    }
?>

