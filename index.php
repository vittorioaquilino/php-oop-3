<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!-- L'e-commerce vende prodotti per gli animali:
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti. :carello_della_spesa:
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php 
require_once __DIR__ . "/Cibo.php";
require_once __DIR__ . "/Attrezzi.php";
require_once __DIR__ . "/Giochi.php";
require_once __DIR__ . "/Utente.php";
require_once __DIR__ . "/Azienda.php";

// instanze prodotti
$ciboGatti = new Cibo ("cibo in scatola", "98123", "cibo in scatola per gatti di alta qualità", "GATTI", 25, "12/12/2022");
// var_dump($ciboGatti);
$attrezzi = new Attrezzi ("collare", "98456", "collare per cani di taglia media", "CANI", 30, "Luxpets");
// var_dump($attrezzi);
$giochi = new Giochi ("boomerang", "98765", "boomerang per cani", "CANI", 15, "Amazon");
// var_dump($giochi);
?>

<!-- instanza utente -->
<?php
$Vittorio = new Utente("Vittorio", "Aquilino", 5555000111222333, true, true);
//$Vittorio->addToShop($ciboGatti);
// var_dump($Vittorio);

// instanza azienda
$azienda = new Azienda("Aquilino s.r.l.", 1122334455, "Via del Mare", "7", "Roma", "70020");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h3>Azienda:</h3>
    <?php echo $azienda->getAddress()?>
    <h3>Prodotti disponibili:</h3>
    <div class="container">
        <ul class="product-list">
            <li><?php echo $ciboGatti->getName()?></li>
            <li><?php echo $attrezzi->getName()?></li>
            <li><?php echo $giochi->getName()?></li>
        </ul>
    </div>
        <?php 
            try {
                $Vittorio->addToShop("prodotto");
            } catch (Exception $e){
                echo $e->getMessage();
            }
        ?>
    <h3><?php echo $Vittorio->nomeUtente ?> ecco il tuo carrello:</h3>
    <div class="carrello">
        <ul>
            <?php foreach($Vittorio->aggiungiProd as $item) { ?>
                <li><?php echo $item->getName() ?></li>
            <?php } ?>
        </ul>
        <div class="totale">
            <h4>Totale ordine: </h4>
            <p>€<?php echo $Vittorio->getTotalPrice()?></p>
            <p>vai al pagamento</p>
        </div>
    </div>
</body>
</html>