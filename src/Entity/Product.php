<?php
/**
 * Description of Product
 *
 * @author hubert
 */
declare(strict_types = 1);
namespace Gwo\Recruitment\Entity\Product;

class Product {
    
    private $productName;
    private $productPrice;
    private $quantity;
    
    function __construct(string $productName, int $productPrice, int $quantity = 1) {
        
        $this->productName = $productName;
        $this->productPrice = $productPrice;
        $this->quantity = $quantity;
    }
    
    function getProductName() {
        return $this->productName;
    }

    function getProductPrice() {
        return $this->productPrice;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function setProductName($productName) {
        $this->productName = $productName;
    }

    function setProductPrice($productPrice) {
        $this->productPrice = $productPrice;
    }

    function setQuantity($quantity) {
        $this->quantity = $quantity;
    }
    

}
