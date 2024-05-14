<?php

include 'Libro.php';
include 'DVD.php';

$libri = [
    new Libro('Il Signore degli Anelli', 'J.R.R. Tolkien', 1954),
    new Libro('1984', 'George Orwell', 1949),
    new Libro('Cime tempestose', 'Emily Brontë', 1847),
    new Libro('Orgoglio e pregiudizio', 'Jane Austen', 1813),
    new Libro('Il conte di Montecristo', 'Alexandre Dumas', 1844),
    new Libro('Moby Dick', 'Herman Melville', 1851),
    new Libro('Guerra e pace', 'Lev Tolstoj', 1869),
    new Libro('Il giovane Holden', 'J.D. Salinger', 1951),
    new Libro('1984', 'George Orwell', 1949),
    new Libro('Anna Karenina', 'Lev Tolstoj', 1877),
    new Libro('Il processo', 'Franz Kafka', 1925),
    new Libro('Don Chisciotte della Mancia', 'Miguel de Cervantes', 1605),
];

$film = [
    new DVD('Inception', 'Christopher Nolan', 2010),
    new DVD('Interstellar', 'Christopher Nolan', 2014),
    new DVD('Pulp Fiction', 'Quentin Tarantino', 1994),
    new DVD('Il padrino', 'Francis Ford Coppola', 1972),
    new DVD('La vita è bella', 'Roberto Benigni', 1997),
];

echo "Numero totale di libri nella biblioteca: " . Libro::contaLibri() . "\n";
echo "Numero totale di DVD nella biblioteca: " . DVD::contaDVD() . "\n";

// Presta un libro
$libro_da_prestare = $libri[5]; 
$libro_da_prestare->presta();

echo "Numero totale di libri nella biblioteca dopo il prestito: " . Libro::contaLibri() . "\n";

?>





