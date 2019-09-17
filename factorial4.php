<?php

//funciones para calculos matemáticas
include("matematica.php");

//variables
$numero = 0;
$resultado = 0;
$mensaje = "ERROR: Incluya un número entre 1 y 170";


//calculos
if ( count($_REQUEST) != 0) {
    $numero = $_REQUEST["valor"];
    
    switch ($numero) {
        case  0: 
            $resultado="";
            break;  
        case ($numero >=1) && ($numero<=170):
        $resultado = factorial($numero);
        $resultado = factorial($numero);
            break;
        default:
            $resultado = $mensaje;
            break;
        }   
    }

    include("calc_factorial.html"); 
    
    ?>