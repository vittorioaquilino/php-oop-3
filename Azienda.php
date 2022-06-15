<?php 
require_once __DIR__ . "/Indirizzi.php";

class Azienda {
    public $nome;
    public $pIva;

    use Indirizzi;

    function __construct($_nome, $_pIva){
        $this->nome = $_nome;
        $this->pIva = $_pIva;
    }

    public function getAddress() {
        return "Azienda: $this->nome <br> P.IVA: $this->pIva <br> $this->via $this->nCivico <br> $this->città <br> $this->cap";
    }
}
?>