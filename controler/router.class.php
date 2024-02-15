<?php
// require "config/config.php";

require_once "ctl.index.php";
require_once "ctl.projects.php";
require_once "ctl.legals.php";
require_once "ctl.privacy.php";

class Router
{
    private $projects, $legals, $privacy;

    public function __construct()
    {
        $this->projects = new Projects();
        $this->legals = new Legals();
        $this->privacy = new Privacy();
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
                header('Location: https://alexeckes.com/pages/home.php');
            }
        } catch (Exception $e) {
            $this->error = $e->getMessage();
        }
    }
}