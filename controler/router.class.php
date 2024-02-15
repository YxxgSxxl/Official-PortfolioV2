<?php
require "config/config.php";

require_once "ctlPage.php";
require_once "ctlProjects.php";
require_once "ctlLegals.php";
require_once "ctlPrivacy.php";

class Router
{
    private $ctlPage, $projects, $legals, $privacy;

    public function __construct()
    {
        $this->ctlPage = new ctlPage();
        $this->projects = new ctlProjects();
        $this->legals = new ctlLegals();
        $this->privacy = new ctlPrivacy();
    }

    public function routerRequest()
    {
        try {
            if (isset($_GET['page'])) {
                switch ($_GET['page']) {
                    case 'projects':
                        $this->projects->projects();
                        break;

                    case 'legals':
                        $this->legals->legals();
                        break;

                    case 'privacy':
                        $this->privacy->privacy();
                        break;

                    default:
                        throw new Exception("Unknown Error");
                }
            } else {
                $this->ctlPage->home();
            }
        } catch (Exception $e) {                                                      // Page d'erreur
            $this->ctlPage->  error($e->getMessage()); 
        }
    }
}