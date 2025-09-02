<?php
require_once 'Autor.php';

$autor1 = new Autor("Elena White", "Estadounidense");
$autor2 = new Autor("Gabriel García Márquez", "Colombiano");
$autor3 = new Autor("Jane Austen", "Británica");
$autor4 = new Autor("Haruki Murakami", "Japonés");

echo "Autor 1: " . $autor1->getNombre() . ", Nacionalidad: " . $autor1->getNacionalidad() . "\n";
echo "Autor 2: " . $autor2->getNombre() . ", Nacionalidad: " . $autor2->getNacionalidad() . "\n";
echo "Autor 3: " . $autor3->getNombre() . ", Nacionalidad: " . $autor3->getNacionalidad() . "\n";
echo "Autor 4: " . $autor4->getNombre() . ", Nacionalidad: " . $autor4->getNacionalidad() . "\n";