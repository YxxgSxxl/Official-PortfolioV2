<?php
require_once "./vue/vue.class.php";

class ctlLegals{
    private $legals;
    

    public function legals()
    {
        $vue = new vue("Legals");
        $vue->afficher(array());
    }
}