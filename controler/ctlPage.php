<?php
require_once "./vue/vue.class.php";

class ctlPage{

    public function home(){
        $vue = new vue("Home"); // Instancie la vue appropriée
        $vue->afficher(array());
    }

    public function error($error){
        $vue = new vue("Error"); // Instancie la vue appropriée
        $vue->afficher(array("error" => $error));
    }
}