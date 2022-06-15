<?php 
trait Indirizzi {
    public $via;
    public $nCivico;
    public $città;
    public $cap;

    function __construct($_via, $_nCivico, $_città, $_cap) {
        $this->via = $_via;
        $this->nCivico = $_nCivico;
        $this->città = $_città;
        $this->cap = $_cap;
    }

    public function getAddress() {
        return "$this->nome <br> $this->via <br> $this->nCivico <br> $this->città <br> $this->cap";
    }
}
?>