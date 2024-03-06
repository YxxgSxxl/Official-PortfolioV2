<?php
class Project
{
    private $fichierProjet;

    public function __construct($project)
    {
        $this->fichierProjet = "./vue/projects/portfoliov2/vue" . $project . ".php";
    }

    public function afficher($data)
    {

        $title = TITREONGLET;

        extract($data);   // Extrait les valeurs du tableau associatif $data dans des variables

        ob_start();

        $header = require "./components/header.php";

        require $this->fichierProjet;   // Génère le contenu de la page en fonction du projet

        $footer = require "./components/footer.php";

        $contenu = ob_get_clean();


        require "gabarit.php";
    }
}