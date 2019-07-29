<?php
namespace App\Basefood;
use App\Interfaces\IBasefood;

/**
 * Concrete class of Basefood
 */
class Pancake extends Basefood
{
    private $description;

    private $price;

    public function __construct()
    {
        $this->description = 'un pancake';
        $this->price       = 2.50;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function printFood()
    {
        echo "<h3>Je suis ".$this->getDescription()."</h3><em>Coût : ".$this->getPrice()." €</em>";
    }
}
