<?php
namespace app\controllers;

use app\base\Controller;

class BaseController extends Controller
{
    public function actionIndex() {
        return $this->render('index');
    }
}
