<?php
require_once "./vue/vue.class.php";

class ctlProjects{
    private $projects;

    public function projects()
    {
        $projects = $this->projects->projects();
        $projects = new vue("Projects");
        $projects->afficher(array("projects" => $projects));
    }
}