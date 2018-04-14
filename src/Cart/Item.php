<?php
/**
 * Description of Item
 *
 * @author hubert
 */
namespace Gwo\Recruitment\Cart;

use Gwo\Recruitment\Cart\Exception\QuantityTooLowException;
use Gwo\Recruitment\Entity\Product;

class Item
{
    
    private $product;
    private $quantity;

    public function __construct(Product $product, int $quantity)
    {
        if ($quantity < $product -> getMinimumQuantity()) {
            throw new QuantityTooLowException("Zamówiono mniej produktu niż wymagano: ".$product->getMinimumQuantity());
        }
        
        $this->product = $product;
        $this->quantity  = $quantity;
    }
    
    public function getTotalPrice()
    {
        return $this->product->getUnitPrice() * $this->quantity;
    }
    
    public function getProduct()
    {
        return $this->product;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
    
    public function setQuantity($quantity)
    {
        if ($quantity < $this->product->getMinimumQuantity()) {
            throw new QuantityTooLowException("MinimumQuntity Error".$this->product->getMinimumQuantity());
        }
        $this->quantity = $quantity;
        return $this;
    }
    public function appendQuantity($quantity)
    {
        $this->quantity = $this->quantity + $quantity;
    }
}
