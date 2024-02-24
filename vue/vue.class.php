<?php
class Vue
{
    private $fichierVue; 

    public function __construct($action) {
        $this->fichierVue = "vue/vue".$action.".php";
    }

      public function afficher($data) {
        $title = TITREONGLET;
        
        extract($data);   // Extrait les valeurs du tableau associatif $data dans des variables
        
        ob_start();
        
        $header = require "./components/header.php";
        
        require $this->fichierVue;   // Génère le contenu de la page en fonction de l'action
        
        $footer = require "./components/footer.php";

        $contenu = ob_get_clean();
        
      
        require "gabarit.php";
      }
}