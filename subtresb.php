<?php
/* WINBA - Prueba técnica fundamentos
   Ricardo Patricio Enciso Peña
   Desafío tres - Programa que genera tablas de multiplicar
*/
    $numero = $_GET["Numero"]; // Se obtiene el valor del número del cuál se desea obtener la tabla de multiplicar
    $inicia = $_GET["IniciaRango"];  // Se obtiene el valor inicial del rango de números de los cuales se van a multiplicar
    $finaliza = $_GET["FinalizaRango"]; //Se obtiene el valor final del rango de números de los cuales se van a multiplicar
    $cicloSel = $_GET["Ciclo"];// Se obtiene el valor del tipo de ciclo con el cual se generará la tabla de multiplicar

    $tabla = []; // Se declara e inicializa la variable dónde se almacenaran los resultados

    switch ($cicloSel) {   //Dependiendo del tipo de ciclo seleccionado es la opción que se realiza
        case "for":
            for($i=$inicia; $i <= $finaliza; $i++) $tabla [] = $numero.' X '.$i.' = '.$numero*$i;  //Para cada iteración se realiza la multiplicación y se almancena el resultado 
            break;
        case "while":
            $j=$inicia;
            while($j <= $finaliza) {
                $tabla [] = $numero.' X '.$j.' = '.$numero*$j; //Para cada iteración se realiza la multiplicación y se almancena el resultado 
                $j++;
            }
            break;
        case "do-while":
            $k=$inicia;
            do{
                $tabla [] = $numero.' X '.$k.' = '.$numero*$k; //Para cada iteración se realiza la multiplicación y se almancena el resultado 
                $k++;
            } while($k < $finaliza);
            break;
    }
       
    //A continuación se lista la tabla de multiplicar según los datos proporcionados
    echo 'Tabla de multiplicar del número '.$numero.' del rango de: '.$inicia.' al '.$finaliza.' <br> realizada con el ciclo "'.$cicloSel.'"<br>';
    foreach ($tabla as $resultado) {
        echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$resultado.'<br>'; 
    }
?>