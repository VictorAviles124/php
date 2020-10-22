<?php
    $arregloColores = array(
        "coche" => "verde",
        "moto" => "roja",
        "avion" => "gris"
    );

    //Una estroctura de control interativa 
    //Que usa llaves o asocianes de datos 

    foreach ($arregloColores as $key) {
        echo " $key";
        echo "<br>";
    }

?>