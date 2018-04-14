<?php
/**
 * Description of Product
 *
 * @author hubert
 */
declare(strict_types = 1);
namespace Gwo\Recruitment\Entity;

use SebastianBergmann\RecursionContext\InvalidArgumentException;

class Product
{
    private $id;
    private $productName;
    private $unitPrice;
    private $minimumQuantity = 1;
    
            /*OldWay
        if($minimumQuantity <= 0){
            throw new InvalidArgumentException('Ilość nie może być mniejsza od 1');
        }
        if($UnitPrice <= 0){
            throw new InvalidArgumentException('Cena nie może być mniejsza niż 1 grosz');
        }
        $this->productName = $productName;
        $this->UnitPrice = $UnitPrice;
        $this->minimumQuantity = $minimumQuantity;
           if($minimumQuantity <= 0){
            throw new InvalidArgumentException('Ilość nie może być mniejsza od 1');
        }
        if($UnitPrice <= 0){
            throw new InvalidArgumentException('Cena nie może być mniejsza niż 1 grosz');
             *              */
    public function __construct()
    {
    }
       
    public function getId()
    {
        return $this->id;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    public function setMinimumQuantity($minimumQuantity)
    {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }
    
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }
}
