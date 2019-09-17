<?php

function factorial($n) {
    if ($n == 1) {
        return 1;
    } else {
         return $n * factorial($n - 1);
     }   
}

//número del cual deseamos obtener el factorial
$numero = 0;


//si hay al menos un argumento (nùmero) lo recogemos del POST
if (count($_REQUEST)!=0)
    $numero=$_REQUEST["valor"];

    echo '
        <html>
        <head>
        <meta charset="UTF-8">
        </head>
        <body>';

//aqui el formulario
    echo '<form method="POST" action="factorial.php">';
    echo '<table>';
    echo '<tr>';
    echo '<td> Introduzca un número: </td>';
    echo "<td><input type='text' id='valor' name='valor' size='2' maxlength='2' value=$numero></td>";
    echo '</tr>';
    echo '<td colspan="2" style="text-align:center;">
        <input type="submit"></td>';
    echo '</tr>';
    echo '</table>';
    echo '</form>';
    echo '<p>&nbsp</p>';
    echo '<table>';
    echo '<tr>';
    echo '<td> El factorial es: </td>';
    echo '<td>';
    //aqui se calcula el factorial
    if ($numero !=0){
        echo factorial($numero);
    }

    echo '</td>';
    echo '</tr>';
    echo '</table>';
    echo '</body>';
    echo '</html>';

?>