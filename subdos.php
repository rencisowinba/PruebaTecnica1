<?php
/* WINBA - Prueba técnica fundamentos
   Ricardo Patricio Enciso Peña
   Desafío dos - Programa que lista los números primos en un rango dado

   Se muestra en código html el formulario dónde se solicita el rango de los números a evaluar si son o no primos
  Los datos registrados en el formulario se envian a través del método get al archivo subdosb.php para su tratamiento
*/
?>
<html>
    <head>
        <title> Winba - Desaf&iacute;o dos -</title>
    </head>
    <body>
        <p> Desafio dos -- N&uacute;meros primos -- </p>
        
        <p> Ingrese el rango del cu&aacute;l requiere saber los n&uacute;meros primos</p>

        <form action="subdosb.php" method="get" name="Primos" id="Primos"> 
            <div align="center">
                <tr>
                    <label> Valor inicial: <input name="IniciaRango" type="text" value=""/></label>
                    <label> Valor final: <input name="FinalizaRango" type="text" value=""/> </label>
                    <input name="submit" type="submit" value="Obtener n&uacute;meros primos"/>
                    <input name="F_obtener" type="hidden" value="Primos"/>
                </tr>
            </div>
        </form>
    </body>
</html>
