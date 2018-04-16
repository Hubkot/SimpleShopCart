<?php
/**
 * Description of Product
 *
 * @author hubert
 */

namespace Gwo\Recruitment\Entity;

use SebastianBergmann\RecursionContext\InvalidArgumentException;

class Product
{
    private $id;
    private $productName;
    private $unitPrice;
    private $minimumQuantity = 1;
   
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
        if ($minimumQuantity <= 0) {
            throw new InvalidArgumentException("Invalid minimum quality");
        }
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
        if ($unitPrice <= 0) {
            throw new InvalidArgumentException("Invalid minimum price");
        }
        $this->unitPrice = $unitPrice;
        return $this;
    }
}
