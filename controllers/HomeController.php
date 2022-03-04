<?php

namespace app\controllers;

use Flight;

/**
 * class HomeController
 *
 * @package app\controllers
 */

class HomeController
{
  public function render()
  {
    Flight::render('components/header.view', array('heading' => 'Hello World!'), 'header_content');
    Flight::render('index.view', null, 'body_content');
    Flight::render('layouts/app.layout', array('title' => 'Home Page'));
  }
}
