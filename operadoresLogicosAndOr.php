<?php
    

    //Los operadores logicos sirven para validar expresiones 
    //tales es el caso del operador AND que sirve para validar 
    //Una sentencia u otra en el caso del operador And que sirve para validar 
    //Amabas sentencias 

    $resultado  =50 ;


    if($resultado < 60 and $resultado > 49){
        //echo " Es iun numero 50 valido";


    }


    $edadValida = 19;

    if($edadValida >18 and $edadValida <26){
       // echo " La edad es valida";
    }
    $sexo= "F";
    if($sexo == 'M' or $sexo == 'F'){
       // echo "Sexo Valido";

    }

    //El operador de difenrete y la negacion 

    $dato = 5;

    if($dato != 10){

    
   // echo " es una dato bueno";
    
    }

    $dato2 = true;
    if (!$dato2) {
        echo " no es verdadero";
    }


?>