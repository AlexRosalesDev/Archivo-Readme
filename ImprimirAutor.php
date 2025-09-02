<?php

require_once 'Autor.php';

class ImprimirAutor {

  
    public function getInfo(Autor $autor): void {
    
        echo "Información del Autor:\n";
        echo "Nombre: " . $autor->getNombre() . "\n";
        echo "Apellido: " . $autor->getApellido() . "\n";
        echo "Año de Nacimiento: " . $autor->getAnioNacimiento() . "\n";
        echo "Nombre Completo: " . $autor->getNombreCompleto() . "\n";
    }
}
?>