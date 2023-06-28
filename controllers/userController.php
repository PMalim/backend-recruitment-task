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

    public function actionCreate() {
        return $this->render('create');
    }

    public function actionCreateFill() {
        $users = User::getAll();
        $id = end($users)->id + 1;

        $newUser = new User(
            $id,
            $_POST["Name"],
            $_POST["Username"],
            $_POST["Email"],
            $_POST["Address"],
            $_POST["Phone"],
            $_POST["Website"],
            $_POST["Company"],
        );

        array_push($users, $newUser);
        $jsonData = json_encode($users, JSON_PRETTY_PRINT);
        file_put_contents(__DIR__.'\..\dataset\users.json', $jsonData);

        return $this->redirect(["user","index"]);
    }
}
