<?php

require 'src/Entity/Product.php';
//require '..\src\Entity\Product.php';
//
$makaron = new Gwo\Recruitment\Entity\Product\Product("Makaron",1.1231541,12);
echo $makaron->getProductName();
echo '<br/>';
echo $makaron->getProductPrice();


?>

