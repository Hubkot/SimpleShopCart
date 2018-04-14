<?php
/**
 * Description of Product
 *
 * @author hubert
 */
declare(strict_types = 1);
namespace Gwo\Recruitment\Entity\Product;

use SebastianBergmann\RecursionContext\InvalidArgumentException;

class Product {
    private $id;
    private $productName;
    private $UnitPrice;
    private $minimumQuantity;
    
            
    function __construct(string $productName, int $productPrice, int $minimumQuantity = 1) {
        
        if($minimumQuantity <= 0){
            throw new InvalidArgumentException('Ilość nie może być mniejsza od 1');
        }
        
        $this->productName = $productName;
        $this->UnitPrice = $productPrice;
        $this->minimumQuantity = $minimumQuantity;
    }
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getProductName() {
        return $this->productName;
    }

    function getUnitPrice() {
        return $this->UnitPrice;
    }

    function getMinimumQuantity() {
        return $this->minimumQuantity;
    }

    function setMinimumQuantity($minimumQuantity) {
        $this->minimumQuantity = $minimumQuantity;
    }
    
    function setProductName($productName) {
        $this->productName = $productName;
    }

    function setUnitPrice($UnitPrice) {
        $this->UnitPrice = $UnitPrice;
    }

    
    


 
    

}
