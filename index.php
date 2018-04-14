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

$makaron = new Product("Makaron",12.1231541);
echo $makaron->getProductName();
echo '<br/>';
echo $makaron->getUnitPrice();
nl();
echo $makaron->getMinimumQuantity();
nl(3);
$drink = new Product("RedBull", 2500,3);



print_r($makaron);
echo '<br/><br/><br/><br/><br/><br/><br/><br/>';
$sc = new Cart();
$sc->addProduct($makaron, 12);
$sc->addProduct($drink, 4);
nl(3);

echo '<pre>', print_r($sc),'</pre>';

$sc->removeProduct($drink);

?>

