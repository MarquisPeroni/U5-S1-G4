<?php

include 'Libro.php';
include 'DVD.php';

$libro1 = new Libro('Il Signore degli Anelli', 'J.R.R. Tolkien', 1954);
$libro2 = new Libro('1984', 'George Orwell', 1949);
$dvd1 = new DVD('Inception', 'Christopher Nolan', 2010);

echo "Numero totale di libri nella biblioteca: " . Libro::contaLibri() . "\n";
echo "Numero totale di DVD nella biblioteca: " . DVD::contaDVD() . "\n";

// Restituzione del libro prestato
$libro1->restituisci();
echo "Numero totale di libri nella biblioteca dopo la restituzione: " . Libro::contaLibri() . "\n";

?>



