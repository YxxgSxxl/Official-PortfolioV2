<?php
require_once "./vue/vue.class.php";

class ctlPrivacy{
    private $privacy;

    public function privacy()
    {
        $privacy = $this->privacy->privacy();
        $vue = new vue("Privacy");
        $vue->afficher(array("privacy" => $privacy));
    }
}