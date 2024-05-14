<?php

if (!class_exists('MaterialeBibliotecario')) {
    include 'MaterialeBibliotecario.php';
}

class DVD extends MaterialeBibliotecario {
    private static $contatoreDVD = 0;
    private $titolo;
    private $regista;
    private $annoPubblicazione;

    public function __construct($titolo, $regista, $annoPubblicazione) {
        parent::__construct(); // Chiamata al costruttore della classe genitore
        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->annoPubblicazione = $annoPubblicazione;
        self::$contatoreDVD++;
    }

    public static function contaDVD() {
        return self::$contatoreDVD;
    }

    public function presta() {
        if (!$this->isBorrowed()) {
            self::$contatoreDVD--;
        }
        parent::presta();
    }
}

?>




