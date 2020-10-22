<?php
        // Un arreglo es tipo de dato que puede conter n datos 
        //Apartir de un alamacenamiento por indice

    $arreglo = array();
    $arreglo[0] = "Juan ";
    $arreglo[1] = 10;
    $arreglo[3] = 'facultad';

    $arreglo2 = array('jose',5,6,7,8,9);
    
    echo count ($arreglo2);
    for ($i=0; $i < count($arreglo2) ; $i++) { 
         # code...
         echo $arreglo2[$i];
         echo "<br>";

         /*if($arreglo[$i] == 'facultad' ){
             echo "Encontraste el dato";
             echo "<br>";
*/
         }
    


?>