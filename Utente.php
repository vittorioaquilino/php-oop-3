<?php 
// creo la classe utente
class Utente {
    public $nomeUtente;
    public $cognome;
    public $carta;
    public $registrato;
    public $validitàCarta;
    public $aggiungiProd = [];

    function __construct($_nomeUtente, $_cognome, $_carta, $_registrato, $_validitàCarta) {
        $this->nomeUtente = $_nomeUtente;
        $this->cognome = $_cognome;
        $this->carta = $_carta;
        $this->registrato = $_registrato;
        $this->validitàCarta = $_validitàCarta;
    }

    public function addToShop($_prodotto) {
        if(get_parent_class($_prodotto) === "prodotto") {
          $this->aggiungiProd[] = $_prodotto;
        } else {
          throw new Exception("Attenzione controlla cosa stai aggiungendo al carrello");
        }
    }

    public function setDiscount() {
        if($this->registrato) {
            return 20;
        } else {
            return 0;
        }
    }

    public function getTotalPrice()
  {
    $totalPrice = 0;
    if ($this->validitàCarta) {

      foreach ($this->aggiungiProd as $item) {
        $totalPrice += $item->prezzo;
      }
      return $totalPrice - $this->setDiscount();
    } else {
      return $totalPrice;
    }
  }
}
?>