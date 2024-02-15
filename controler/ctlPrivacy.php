<?php
require_once "./vue/vue.class.php";

class ctlPrivacy{
    private $privacy;
    public function __construct() {
        $this->privacy = new ctlPrivacy();
    }
    public function privacy()
    {
        require '../pages/privacy.php';
    }
}