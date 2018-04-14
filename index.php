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
        $product = new Product();
        $product
            ->setId(1)
            ->setUnitPrice(1);

        $product2 = new Product();
        $product2->setUnitPrice(2);
        $cart = new Cart();
        $cart->addProduct($product, 1);
        $cart->addProduct($product2, 1);
        
        
        nl(4);
        var_dump($product);
        nl(4);
        var_dump($cart->getItem(0)->getProduct());
        nl(4);
        echo '<pre>', print_r($cart), '</pre>';
        nl(2);
        
        echo $cart->getTotalPrice();
        nl(2);
        //echo '<pre>', print_r($cart[0]), '</pre>';
?>

