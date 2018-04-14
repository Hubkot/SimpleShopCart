<?php
/**
 * Description of Item
 *
 * @author hubert
 */
namespace Gwo\Recruitment\Cart;

use Gwo\Recruitment\Cart\Exception\QuantityTooLowException;
use Gwo\Recruitment\Entity\Product;


class Item {
    
    private $product;
    private $quantity;
    
    function __construct(Product $product, int $quantity) {
        
        if($quantity < $product->getMinimumQuantity())
        {
            throw new QuantityTooLowException("Nie można zamówić mniejszej ilości produktu niż : ".$product->getMinimumQuantity());
        }
        
        $this->product = $product;
        $this->quantity  = $quantity;
        
    }
    
    function getTotalPrice()
    {
        return $this->product->getUnitPrice() * $this->quantity;
    }
    
    function getProduct() {
        return $this->product;
    }

    function getQuantity() {
        return $this->quantity;
    }


    

}
