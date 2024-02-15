<?php
require_once "./vue/vue.class.php";

class ctlProjects{
    private $projects;

    public function projects()
    {
        $projects = $this->projects->projects();
        $vue = new vue("Projects");
        $vue->afficher(array("clients" => $projects));
    }
}