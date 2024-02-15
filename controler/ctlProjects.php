<?php
require_once "./vue/vue.class.php";

class ctlProjects{
    private $projects;
    public function __construct() {
        $this->projects = new Projects();
    }
    public function projects()
    {
        require '../pages/projects.php';
    }
}