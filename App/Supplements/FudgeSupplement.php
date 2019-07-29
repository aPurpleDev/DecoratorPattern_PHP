<?php
namespace App\Supplements;

use App\Interfaces\iBasefood;
use App\Basefood\Basefood;

/**
 * Decorator for concrete Basefoods
 */
class FudgeSupplement extends Basefood
{
    public $pancake;

    public function __construct(Basefood $pancake)
    {
        $this->description = $pancake->getDescription() . "supplément caramel";
        $this->price       = $pancake->getPrice() + 0.40;
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
