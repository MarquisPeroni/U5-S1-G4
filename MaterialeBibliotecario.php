<?php

if (!interface_exists('Prestito')) {
    include 'Prestito.php';
}

abstract class MaterialeBibliotecario implements Prestito {
    protected static $contatoreMateriali = 0;

    public function __construct() {
        self::$contatoreMateriali++;
    }

    public function restituisci() {
        if ($this->isBorrowed()) {
            self::$contatoreMateriali--;
        }
    }

    public function isBorrowed() {
        return self::$contatoreMateriali > 0;
    }
}

?>



