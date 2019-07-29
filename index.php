<?php
use App\Interfaces\IBasefood;

use App\Basefood\Basefood;
use App\Basefood\Pancake;
use App\Basefood\Waffle;

use App\Supplements\FudgeSupplement;
use App\Supplements\WhippedSupplement;

require ('vendor/autoload.php');
include ('template.html');

/**
 * Test class of concrete classes of
 * @var Basefood
 */

$pancake = new Pancake();
$pancake->printFood();

$pancake = new WhippedSupplement(new Pancake());
$pancake->printFood();

$pancake = new FudgeSupplement(new WhippedSupplement(new Pancake));
$pancake->printFood();

$waffle = new Waffle();
$waffle->printFood();

$waffle = new WhippedSupplement(new Waffle());
$waffle->printFood();

$waffle = new FudgeSupplement(new WhippedSupplement(new Waffle));
$waffle->printFood();
?>
