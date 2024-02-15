<?php
require "./config/config.php";

require_once "ctlPage.php";
require_once "ctlProjects.php";
require_once "ctlLegals.php";
require_once "ctlPrivacy.php";

class Router
{
    private $ctlPage, $ctlProjects, $ctlLegals, $ctlPrivacy;

    public function __construct()
    {
        $this->ctlPage = new ctlPage();
        $this->ctlProjects = new ctlProjects();
        $this->ctlLegals = new ctlLegals();
        $this->ctlPrivacy = new ctlPrivacy();
    }

    public function routerRequest()
    {
        try {
            if (isset($_GET['page'])) {
                switch ($_GET['page']) {
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
                        throw new Exception("Unknown Error");
                }
            } else {
                $this->ctlPage->home();
            }
        } catch (Exception $e) {
            $this->ctlPage->  error($e->getMessage()); 
        }
    }
}