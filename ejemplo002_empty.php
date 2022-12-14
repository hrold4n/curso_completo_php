<?php   

    /*
    Uso de la función EMPTY. 
    La función EMPTY valida que la variable no esté vacía, es decir, que contenga algún dato distinto de NULL.
    Esta función retorna falso (false) si la variable existe y no está vacía, de lo contrario retorna verdadero (true).
    */

    # Ejercicio 1: Variable "apellido" que no contiene un valor.


    $apellido = '';

    if(!empty($apellido)){
      
        echo $apellido; 
    
    }

    else{

        echo "El campo 'Apellido' es requerido.\n";
        var_dump(empty($apellido)); # Retorna true.

    }

    unset($apellido);
    echo "\n";

    # Ejemplo 2: Variable "apellido" declarada con un valor asignado.

    $apellido = 'Poe';

    if(!empty($apellido)){
      
        echo $apellido . "\n";
        var_dump(empty($apellido)); # Retorna false.
    
    }

    else{

        echo 'El campo "Apellido" es requerido.';

    }


?>