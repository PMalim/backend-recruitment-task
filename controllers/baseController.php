<?php
namespace app\controllers;

use app\base\Application;
use app\base\Controller;

class BaseController extends Controller
{
    /**
     * Index template to display some statistics
     * If player not logg in just display logg In
     */
    public function actionIndex() {
        return $this->render('index');
    }
}
