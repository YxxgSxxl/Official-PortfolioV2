<?php
require_once "./vue/vue.class.php";

class ctlLegals{
    private $legals;
    
    public function __construct() {
        $this->legals = new Legals();
    }
    public function legals()
    {
        require '../pages/legals.php';
    }
}