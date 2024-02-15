<?php
class Legals{
    private $legals;
    
    public function __construct() {
        $this->legals = new Legals();
    }
    public function legals()
    {
        require '../pages/legals.php';
    }
}