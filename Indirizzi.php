<?php 
trait Indirizzi {
    public $via;
    public $nCivico;
    public $città;
    public $cap;

    

    public function getAddress() {
        return "Azienda: $this->nome <br> P.IVA: $this->pIva <br> Indirizzo: $this->via $this->nCivico <br> Città: $this->città  $this->cap";
    }
}
?>