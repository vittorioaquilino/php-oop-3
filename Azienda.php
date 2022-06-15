<?php 
require_once __DIR__ . "/Indirizzi.php";

class Azienda {
    public $nome;
    public $pIva;

    use Indirizzi;

    function __construct($_nome, $_pIva, $_via, $_nCivico, $_città, $_cap){
        $this->nome = $_nome;
        $this->pIva = $_pIva;
        $this->via = $_via;
        $this->nCivico = $_nCivico;
        $this->città = $_città;
        $this->cap = $_cap;
    }

}
?>