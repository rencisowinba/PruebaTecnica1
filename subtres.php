<?php
/* WINBA - Prueba técnica fundamentos
   Ricardo Patricio Enciso Peña
   Desafío tres - Programa que genera tablas de multiplicar

   Se muestra en código html el formulario dónde se solicitan los parámetros para emitir las tablas correspondientes
   los datos depositados en el formulario se envian a través del método get al archivo subtresb.php para su tratamiento
*/
?>
<html>
    <head>
        <title> Winba - Desaf&iacute;o tres -</title>
    </head>
    <body>
        <p> Desafio tres -- Tablas de multiplicar -- </p>
        
        <p> Ingrese los siguientes datos, requeridos para emitir la tabla de multilicar del n&uacute;mero deseado</p>

        <form action="subtresb.php" method="get" name="Tablas" id="Tablas"> 
            <div align="center">
                <tr>
                    <label> N&uacute;mero: <input name="Numero" type="text" value=""/></label>
                    <label> Valor inicial: <input name="IniciaRango" type="text" value=""/></label>
                    <label> Valor final: <input name="FinalizaRango" type="text" value=""/> </label>
                    <label> Con cu&aacute;l Ciclo: <input name="Ciclo" type="text" list="Ciclos"/>
                            <datalist id="Ciclos">
                                <option>for</option>
                                <option>while</option>
                                <option>do-while</option>
                            </datalist>
                    </label>
                    <input name="submit" type="submit" value="Generar tablas"/>
                    <input name="F_obtener" type="hidden" value="Tablas"/>
                </tr>
            </div>
        </form>
    </body>
</html>
