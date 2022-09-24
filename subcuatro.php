<?php
/* WINBA - Prueba técnica fundamentos
   Ricardo Patricio Enciso Peña
   Desafío cuatro - Programa que indica la cantidad de veces que se repite una palabra en una cadena de caracteres dada

   Se muestra en código html el formulario dónde se solicita la cadena de caracteres que se evaluará
   los datos depositados en el formulario se envian a través del método get al archivo subtresb.php para su tratamiento
*/
?>
<html>
    <head>
        <title> Winba - Desaf&iacute;o cuatro -</title>
    </head>
    <body>
        <p> Desafio cuatro -- Palabras repetidas -- </p>
        
        <p> Ingrese la frase de la cu&aacute;l se desea contar las palabras repetidas</p>

        <form action="subcuatrob.php" method="get" name="Palabras" id="Palabras"> 
            <div align="center">
                <tr>
                    <label> Frase a evaluar: <input name="Frase" type="text" value=""/></label>
                    <input name="submit" type="submit" value="Ejecutar"/>
                    <input name="F_obtener" type="hidden" value="Palabras"/>
                </tr>
            </div>
        </form>
    </body>
</html>
