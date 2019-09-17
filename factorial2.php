<?php

function factorial($n) {
    if ($n == 1) {
        return 1;
    } else {
         return $n * factorial($n - 1);
     }   
}

//definiciòn de variables, numero del cual se calcularà el factorial
$numero = 0;
//definiciòn de variables,calculo obtenido mediante la funcion factorial
$resultado = 0;
$mensaje = "INCLUYA UN VALOR ENTRE 1 Y 170";

//si hay al menos un argumento (nùmero) lo recogemos
if ( count($_REQUEST) != 0) {
    $numero = $_REQUEST["valor"];
}
                    // aquí se calcula el factorial 
                    // siempre que el valor del argumento:
                    // sea mayor de 0: 1, 2, 3...
                    // y menor de 171
                    // && significa Y (condicional)
      
      if ( $numero > 0 && $numero < 171 ) {
            $resultado = factorial($numero);
    } 
     else {
            $resultado = $mensaje;
    } 
   
    //  //colocar el resultado en "" cuando el valor de resultado sea cero
    // if ($resultado==0) {
    //      $resultado="";
    // }


echo "
<html>
    <head>
        <meta charset='UTF-8'>
        <link rel='stylesheet' href='./css/formularios.css'>
    </head>
    <body>
    <!--aqui el formulario-->    
        <form method='POST' action='factorial2.php'>
        <table>
           <tr>
                <td>Introduzca un número</td>
                <td> <input type='text' id='valor' name='valor' value=$numero></td>           
           </tr>     
           <tr>
                <td colspan='2' style='text-align: center;'>
                    <input type='submit'></td>
            </tr>
        </table>    
        </form>                      
        <p>&nbsp</p>
        <table>
            <tr>
                <td>El factorial es:</td>
                <!-- resultado del cálculo -->
                <td>$resultado</td>
            </tr>
        </table>
    </body>
</html>";

?>