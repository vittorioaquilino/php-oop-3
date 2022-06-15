<?php 
require_once __DIR__ . "/Prodotti.php";

class Giochi extends Prodotti {

    public $marca;

    function __construct($_nome, $_codiceProd, $_descrizione, $_categoria, $_prezzo, $_marca) {
        parent::__construct($_nome, $_codiceProd, $_descrizione, $_categoria, $_prezzo);

        $this->marca = $_marca;
    }

    public function getName()
    {
        return "Nome prodotto: $this->nome <br> codice prodotto: $this->codiceProd <br> descrizione: $this->descrizione <br> categoria: $this->categoria <br> prezzo: €$this->prezzo <br> marca: $this->marca";
    }
}
?>