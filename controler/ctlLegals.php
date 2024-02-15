<?php
require_once "./vue/vue.class.php";

class ctlLegals{
    private $legals;
    

    public function legals()
    {
        $legals = $this->legals->legals();
        $vue = new vue("Legals");
        $vue->afficher(array("legals" => $legals));
    }
}