<?php 
require_once __DIR__ . "/Prodotti.php";

class Cibo extends Prodotti {

    public $scadenza;

    function __construct($_nome, $_codiceProd, $_descrizione, $_categoria, $_prezzo, $_scadenza) {
        parent::__construct($_nome, $_codiceProd, $_descrizione, $_categoria, $_prezzo);

        $this->scadenza = $_scadenza;
    }

    public function getName()
    {
        return "Nome prodotto: $this->nome <br> codice prodotto: $this->codiceProd <br> descrizione: $this->descrizione <br> categoria: $this->categoria <br> prezzo: €$this->prezzo <br> scadenza: $this->scadenza";
    }

}
?>