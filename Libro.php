<?php
require_once 'Autor.php';
require_once 'IPublicable.php';

class Libro implements IPublicable {
  
    private string $titulo;
    private int $anioPublicacion;
    private Autor $autor; 

    public function __construct(string $titulo, int $anioPublicacion, Autor $autor) {
        $this->titulo = $titulo;
        $this->anioPublicacion = $anioPublicacion;
        $this->autor = $autor;
    }

    
    public function getTitulo(): string {
        return $this->titulo;
    }
    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    public function getInfo(): string {
        $info = "LIBRO: " . $this->titulo . " (" . $this->anioPublicacion . ")\n";
        $info .= "Autor: " . $this->autor->getNombreCompleto() . "\n";
        return $info;
    }
    
}
?>