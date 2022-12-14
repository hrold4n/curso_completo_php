<?php

    /*
    Uso de la función ISSET. 
    La función ISSET determina si una variable existe y no es NULL.
    Esta función retorna verdadero (true) si la variable existe y contiene algún dato, de lo contrario retorna falso (false).
    */

    # Ejemplo 1: Variable "nombre" declarada sin un valor asignado.

    $nombre;

    if(isset($nombre)){

        echo $nombre; 
                
    }

    else{

        echo "Variable no declarada o null.\n";
        var_dump(isset($nombre)); # Retorna false, ya que la variable "nombre" existe pero es NULL.

    }


    unset($nombre);
    echo "\n";
    
    # Ejemplo 2: Variable "nombre" declarada con un valor asignado y que no es NULL.

    $nombre = 'Edgard';

    if(isset($nombre)){

        echo $nombre . "\n";
        var_dump(isset($nombre)); # Retorna true, ya que la variable "nombre" existe y tiene un valor asignado.
                
    }

    else{

        echo 'Variable no declarada o null.';

    }

    unset($nombre);
    echo "\n";
    
    # Ejemplo 3: Variable "nombre" declarada pero que está vacía, lo que no es igual a NULL.

    $nombre = '';

    if(isset($nombre)){

        echo $nombre . "\n";
        var_dump(isset($nombre)); # Retorna true, ya que la variable "nombre" existe y tiene un valor asignado. PHP interpreta 'vacía' como un string.
            
    }

    else{

        echo 'Variable no declarada o null.';

    }
    

    unset($nombre);
    echo "\n";

    # Ejemplo 4: variable "nombre" declarada con valor NULL asignado.

    $nombre = NULL;

    if(isset($nombre)){

        echo $nombre;
            
    }

    else{

        echo "Variable no declarada o null.\n";
        var_dump(isset($nombre)); # Retorna false, ya que la variable "nombre" existe pero es NULL.

    }

?>