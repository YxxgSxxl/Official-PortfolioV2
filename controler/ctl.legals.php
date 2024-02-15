<?php
class Legals{
    public function __construct() {
        $this->legals = new Legals();
    }
    public function legals()
    {
        require '../pages/legals.php';
    }
}