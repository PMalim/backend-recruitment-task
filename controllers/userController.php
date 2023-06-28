<?php
namespace app\controllers;

use app\base\Application;
use app\base\Controller;
use app\models\User;

class UserController extends Controller
{
    public function actionIndex() {
        $users = User::getAll();

        return $this->render('index', [
            "users" => $users
        ]);
    }
}
