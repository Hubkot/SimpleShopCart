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

class Cart {
    
    private $cartList = [];
    
    function addProduct(Product $product, int $quantity)
    {
        $this->cartList[] = new Item($product, $quantity);
    }
    //Poprawić funkcję
    function removeProduct(Product $productToRemove)
    {
        $index = array_search($productToRemove, $this->cartList);
        var_dump($index);
    }
    
    function getItem(int $index)
    {
        if($this->cartList[$index] == null){
              throw new OutOfBoundsException("Brak takiego produktu w koszyku");
        }
        else{return $this->cartList[$index];}
    }
    
    function getItems()
    {
        return $this->cartList;
    }

    
    
 
}
