<?php
/**
 * Description of Item
 *
 * @author hubert
 */
namespace Gwo\Recruitment\Cart\Item;

use Gwo\Recruitment\Entity\Product\Product;

class Item {
    
    private $productId;
    private $quantity;
    private $totalPrice;
    
    function __construct(Product $product, int $quantity) {
        $this->productId = $product->getId();
        $this->quantity  = $quantity;
    }
    
    function getTotalPrice()
    {
        
    }

}
