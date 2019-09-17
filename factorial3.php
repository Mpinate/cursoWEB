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
$mensaje = "ERROR: Incluya un número entre 1 y 170";

if ( count($_REQUEST) != 0) {
    $numero = $_REQUEST["valor"];
    
    switch ($numero) {
        case  0: 
            $resultado="";
            break;  
        case ($numero >=1) && ($numero<=170):
            $resultado = factorial($numero);
            break;
        default:
            $resultado = $mensaje;
            break;
        }   
    }

echo "
<html>
    <head>
        <meta charset='UTF-8'>
        <link rel='stylesheet' href='./css/formularios.css'>
    </head>
    <body>
    <!--aqui el formulario-->    
        <form method='POST' action='factorial3.php'>
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