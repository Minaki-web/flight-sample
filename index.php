<?php

use app\controllers\HomeController;

require 'vendor/autoload.php';

$home = new HomeController();

Flight::route('/', [$home, 'render']);

Flight::start();
