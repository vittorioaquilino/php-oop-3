<?php 
require_once __DIR__ . "/Indirizzi.php";

class Azienda {
    public $nome;
    public $pIva;

    use Indirizzi;

    function __construct($_nome, $_pIva){
        $this->nome = $_nome;
        $this->pIva = $_pIva;
        $this->via = "Via del mare";
        $this->nCivico = "7";
        $this->città = "Roma";
        $this->cap = "71029";
    }

}
?>