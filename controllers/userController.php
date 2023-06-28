<?php
namespace app\controllers;

use app\base\Application;
use app\base\Controller;

class UserController extends Controller
{
    public function actionIndex() {
        return $this->render('index');
    }
}
