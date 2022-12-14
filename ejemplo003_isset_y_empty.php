<?php

    # Uso de ambas funciones ISSET y EMPTY trabajando juntas.

    $nombres = 'Edgar Allan';
    $apellidos = 'Poe';
    $nombre_completo = array();

     if(isset($nombres, $apellidos)){
        var_dump(isset($nombres, $apellidos)) . "\n"; // Retorna true porque las variables "nombre" y "apellido" existen y no son nulas.
        if(!empty($nombres) || !empty($apellidos)){
            array_push($nombre_completo, $nombres, $apellidos);
            var_dump(empty($nombre_completo)); // Retorna false porque la variable "nombre_completo" no está vacía.
        }
        else{
            
            echo 'Error, los campos "Nombre" y "Apellido" son requeridos.';

        }
     }

?>