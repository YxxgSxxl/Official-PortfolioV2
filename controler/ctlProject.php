<?php
require_once "./vue/project.class.php";

class ctlProject{
    private $project;

    public function portfolioV2()
    {
        $vue = new Project("Portfoliov2");
        $vue->afficher(array());
    }

    public function calculatrice()
    {
        $vue = new project("Calculatrice");
        $vue->afficher(array());
    }

    public function botdiscord()
    {
        $vue = new project("Botdiscord");
        $vue->afficher(array());
    }
}