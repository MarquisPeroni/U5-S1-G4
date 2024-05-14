<?php

if (!class_exists('MaterialeBibliotecario')) {
    include 'MaterialeBibliotecario.php';
}

class Libro extends MaterialeBibliotecario {
    private static $contatoreLibri = 0;
    private $titolo;
    private $autore;
    private $annoPubblicazione;

    public function __construct($titolo, $autore, $annoPubblicazione) {
        parent::__construct(); // Chiamata al costruttore della classe genitore
        $this->titolo = $titolo;
        $this->autore = $autore;
        $this->annoPubblicazione = $annoPubblicazione;
        self::$contatoreLibri++;
    }

    public static function contaLibri() {
        return self::$contatoreLibri;
    }

    public function presta() {
        if (!$this->isBorrowed()) {
            self::$contatoreLibri--;
        }
        parent::presta();
    }
}

?>





