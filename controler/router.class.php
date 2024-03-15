<?php
require_once "config/config.php";

require_once "ctlPage.php";
require_once "ctlProjects.php";
require_once "ctlProject.php";
require_once "ctlLegals.php";
require_once "ctlPrivacy.php";

class Router
{
    private $ctlPage, $ctlProjects, $ctlProject, $ctlLegals, $ctlPrivacy;

    public function __construct()
    {
        $this->ctlPage = new ctlPage();
        $this->ctlProjects = new ctlProjects();
        $this->ctlProject = new ctlProject();
        $this->ctlLegals = new ctlLegals();
        $this->ctlPrivacy = new ctlPrivacy();
    }

    public function routerRequest()
    {
        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'projects':
                        $this->ctlProjects->projects();
                        break;

                    case 'legals':
                        $this->ctlLegals->legals();
                        break;

                    case 'privacy':
                        $this->ctlPrivacy->privacy();
                        break;

                    default:
                        throw new Exception("Erreur: action non valide");
                }
            } elseif (isset($_GET['projet'])) {
                switch ($_GET['projet']) {
                    case '1':
                        $this->ctlProject->portfolioV2();
                        echo "hello";
                        break;

                    case '2':
                        $this->ctlProject->calculatrice();
                        break;

                    case '3':
                        $this->ctlProject->botdiscord();
                        break;

                    default:
                        throw new Exception("Erreur 404: Projet non existant");
                }
            } else {
                $this->ctlPage->home();
            }
        } catch (Exception $e) {
            $this->ctlPage->error($e->getMessage());
        }
    }
}