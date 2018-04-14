<?php
require_once 'vendor/autoload.php';

use Gwo\Recruitment\Cart\Cart;
use Gwo\Recruitment\Cart\Item;
use Gwo\Recruitment\Entity\Product;

function nl($linebreak = 1){
    for($i = 1; $i<=$linebreak;$i++){
        echo '<br />';
    }
}

$makaron = new Product();
$makaron->setId(1)->setUnitPrice(100);
$drink = new Product();
$drink->setId(12);
$drink->setUnitPrice(1222);
var_dump($makaron);
nl(2);
var_dump($drink);

$sc = new Cart();
$sc->addProduct($makaron, 12);
$sc->addProduct($drink, 4);
$sc->addProduct($makaron, 12);
nl(3);

echo '<pre>', print_r($sc->getItems()),'</pre>';
echo '<pre>', print_r($sc->getItem(2)),'</pre>';
?>

