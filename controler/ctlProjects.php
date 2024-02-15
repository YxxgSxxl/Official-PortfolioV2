<?php
require_once "./vue/vue.class.php";

ini_set('memory_limit', '244M');

class ctlProjects{
    private $projects;
    public function __construct() {
        $this->projects = new ctlProjects();
    }
    public function projects()
    {
        require '../pages/projects.php';
    }
}