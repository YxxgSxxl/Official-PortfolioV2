<?php
require "controler/router.class.php";

error_reporting(E_ALL);
ini_set('display_errors','On');

$index = new Router();
$index->routerRequest();
