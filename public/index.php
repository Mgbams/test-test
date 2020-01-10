<?php

use  Weatherproject\Controller\HomeController;

require './../vendor/autoload.php';
//var_dump('toto');
$controller = new HomeController;
if (count($_POST) > 0) {
    $controller->showByCity();
} else {
    $controller->show();
}

