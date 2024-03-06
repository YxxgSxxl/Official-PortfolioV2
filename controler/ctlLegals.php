<?php
require_once "./vue/vue.class.php";

class ctlLegals{
    
    public function legals()
    {
        $vue = new vue("Legals");
        $vue->afficher(array());
    }
}