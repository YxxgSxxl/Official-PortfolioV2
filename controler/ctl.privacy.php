<?php
class Privacy{
    private $privacy;
    public function __construct() {
        $this->privacy = new Privacy();
    }
    public function privacy()
    {
        require '../pages/privacy.php';
    }
}