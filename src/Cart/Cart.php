<?php
/**
 * Description of Cart
 *
 * @author hubert
 */
namespace Gwo\Recruitment\Cart;

use Gwo\Recruitment\Cart\Item;
use Gwo\Recruitment\Entity\Product;
use OutOfBoundsException;

class Cart
{
    
    private $cartList = [];
    
    public function addProduct(Product $product, int $quantity)
    {
        $this->cartList[] = new Item($product, $quantity);
        return $this;
    }
    
    public function removeProduct(Product $productToRemove)
    {
        foreach ($this->cartList as $item) {
            $index = array_search($item, $this->getItems());
            if ($item->getProduct() == $productToRemove) {
                unset($this->cartList[$index]);
            }
        }
    }
    
    public function getItem(int $index)
    {
        if ($this->cartList[$index] == null) {
              throw new OutOfBoundsException("Brak takiego produktu w koszyku");
        } else {
            return $this->cartList[$index];
        }
    }
    
    public function getItems()
    {
        return $this->cartList;
    }
    
    public function setQuantity(Product $product, $quantity)
    {
        foreach ($this->cartList as $item) {
            $index = array_search($item, $this->getItems());
            if ($item->getProduct() == $product) {
                $item->setQuantity($quantity);
            }
            return $this;
        }
    }

    public function getTotalPrice()
    {
        $total = 0;
        foreach ($this->cartList as $item) {
            $total = $total + $item->getTotalPrice();
        }
        return $total;
    }
}
