<?php
require_once "./vue/vue.class.php";

class ctlPrivacy{
    private $privacy;

    public function privacy()
    {
        $privacy = $this->privacy->privacy();
        $privacy = new vue("Privacy");
        $privacy->afficher(array("privacy" => $privacy));
    }
}