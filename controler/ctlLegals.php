<?php
require_once "./vue/vue.class.php";

class ctlLegals{
    private $legals;
    
    public function __construct() {
        $this->legals = new ctlLegals();
    }
    public function legals()
    {
        require '../pages/legals.php';
    }
}