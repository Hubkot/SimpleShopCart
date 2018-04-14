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
        if (($key = array_search($productToRemove, $this->cartList, true)) !== false) {
            unset($this->cartList[$key]);
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
        $index = array_search($product, $this->cartList);
        return $this;
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
