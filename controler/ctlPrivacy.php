<?php
require_once "./vue/vue.class.php";

class ctlPrivacy{


    public function privacy()
    {
        $vue = new vue("Privacy");
        $vue->afficher(array());
    }
}