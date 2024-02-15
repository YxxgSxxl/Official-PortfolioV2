<?php
require_once "./vue/vue.class.php";

class ctlLegals{
    private $legals;
    

    public function legals()
    {
        $legals = $this->legals->legals();
        $legals = new vue("Legals");
        $legals->afficher(array("legals" => $legals));
    }
}