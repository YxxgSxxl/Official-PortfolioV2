<?php
require_once "./vue/vue.class.php";

class ctlProjects{
    private $projects;

    public function projects()
    {
        $vue = new vue("Projects");
        $vue->afficher(array());
    }
}