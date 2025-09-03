<?php
require_once 'IPublicable.php'; 
require_once 'Autor.php'; 

class Revista implements IPublicable {

    private string $nombre;
    private int $numeroEdicion;
    private string $fecha;

    public function __construct(string $nombre, int $numeroEdicion, string $fecha) {
        $this->nombre = $nombre;
        $this->numeroEdicion = $numeroEdicion;
        $this->fecha = $fecha;
    }

    
    public function getInfo(): string {
        $info = "REVISTA: " . $this->nombre . "\n";
        $info .= "Número de Edición: " . $this->numeroEdicion . "\n";
        $info .= "Fecha: " . $this->fecha . "\n";
        return $info;
    }
}
?>