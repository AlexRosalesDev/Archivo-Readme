<?php
require_once 'Autor.php';
require_once 'ImprimirAutor.php';
require_once 'Libro.php';
require_once 'Revista.php';
require_once 'IPublicable.php';

// Crear Autores
$autor1 = new Autor("Elena", "White", 1827);
$autor2 = new Autor("George", "Orwell", 1903);

// Crear 2 Libros (que implementan IPublicable)
$libro1 = new Libro("El Camino a Cristo", 1892, $autor1);
$libro2 = new Libro("1984", 1949, $autor2);

// Crear 2 Revistas (que implementan IPublicable)
$revista1 = new Revista("National Geographic", 255, "2023-10-01");
$revista2 = new Revista("Time", 142, "2023-09-15");

// Crear un arreglo de objetos IPublicable
$publicaciones = [$libro1, $libro2, $revista1, $revista2];

// Iterar sobre el arreglo e imprimir la información de cada elemento
foreach ($publicaciones as $publicacion) {
    // Como todos implementan IPublicable, todos tienen el método getInfo()
    echo $publicacion->getInfo();
    echo "-------------------------\n";
}
?>