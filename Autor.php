<?php

class Autor {

    private string $nombre;
    private string $apellido;
    private int $anioNacimiento;

    public function __construct(string $nombre, string $apellido, int $anioNacimiento) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->anioNacimiento = $anioNacimiento;
    }


    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellido(): string {
        return $this->apellido;
    }

    public function getAnioNacimiento(): int {
        return $this->anioNacimiento;
    }


    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellido(string $apellido): void {
        $this->apellido = $apellido;
    }

    public function setAnioNacimiento(int $anioNacimiento): void {
        $this->anioNacimiento = $anioNacimiento;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellido;
    }
}
?>