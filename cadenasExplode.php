<?php

    $var = "perdor jimenez lopezx";
    $fecha = " 01 - 05 - 2017";

    //Explode es una funcion que convertitre un strign a un aretgglo despendiendo
    //de la construccion  pedida

    $datos = explode(" ",$var);
    $f = explode("-",$fecha);

    echo "El a;o de la fecjha es:" . $f[2];
    
?>