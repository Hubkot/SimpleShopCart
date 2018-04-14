<?php
/**
 * Description of Cart
 *
 * @author hubert
 */
namespace Gwo\Recruitment\Cart\Cart;

use Gwo\Recruitment\Cart\Item\Item;
use Gwo\Recruitment\Entity\Product\Product;

class Cart {
    
    private $cartList = [];
    
    function addProduct(Product $product, int $quantity)
    {
        $this->cartList[] = new Item($product, $quantity);
    }
    
 
}
