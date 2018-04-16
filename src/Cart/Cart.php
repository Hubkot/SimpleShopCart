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
        $searchForProduct = $this->checkIfExistsInCart($product);
        if ($searchForProduct !== false) {
            $this->cartList[$searchForProduct]->appendQuantity($quantity);
        } else {
            $this->cartList[] = new Item($product, $quantity);
        };
        
        return $this;
    }
    public function checkIfExistsInCart(Product $product)
    {
        foreach ($this->cartList as $key => $item) {
            if ($item->product == $product) {
                return $key;
            }
        }
        return false;
    }
    public function removeProduct(Product $productToRemove)
    {
    //TODO: Do poprawienia - nie powinienem szukać przez foreacha
        foreach ($this->cartList as $item) {
            $index = array_search($item, $this->getItems());
            if ($item->getProduct() == $productToRemove) {
                unset($this->cartList[$index]);
                $this->cartList = array_values($this->cartList);
            }
        }
    }
    public function getItem(int $index)
    {
        if (!$this->cartList[$index]) {
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
        $searchForProduct = $this->checkIfExistsInCart($product);
        if ($searchForProduct === false) {
            $this->addProduct($product, $quantity);
        } else {
            $this->cartList[$searchForProduct]->setQuantity($quantity);
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
