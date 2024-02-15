<?php
require "controler/router.class.php";

function index() {
    header('Location: https://alexeckes.com/pages/home.php');
}

if ($_GET['page']) {
    $index = new Router();
    $index->routerRequest();
} else {
    index();
}