<?php
class Vue
{
    private $fichierVue; 

    public function __construct($action) {
        $this->fichierVue = "vue/vue".$action.".php";
      }

      public function afficher($data) {
        $title = TITREONGLET;
    //    $titre = "";      // Le titre de la page est généré dans le fichierVue
    
        extract($data);   // Extrait les valeurs du tableau associatif $data dans des variables
    
        ob_start();
    
        require $this->fichierVue;   // Génère le contenu de la page en fonction de l'action
    
        $contenu = ob_get_clean();
        
        $footer = require "components/footer.php";
      
        require "gabarit.php";
      }
}