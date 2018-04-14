<?php
require_once 'vendor/autoload.php';

use Gwo\Recruitment\Cart\Cart\Cart;
use Gwo\Recruitment\Entity\Product\Product;

function nl($linebreak = 1){
    for($i = 1; $i<=$linebreak;$i++){
        echo '<br />';
    }
}

$makaron = new Product("Makaron",12.1231541,2);
echo $makaron->getProductName();
echo '<br/>';
echo $makaron->getUnitPrice();
nl();
echo $makaron->getMinimumQuantity();
nl(10);
print_r($makaron);
echo '<br/><br/><br/><br/><br/><br/><br/><br/>';
$sc = new Cart();
$sc->addProduct($makaron, 12);
nl(3);
print_r($sc);
?>

