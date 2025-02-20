<?php
namespace app\controllers;

use app\base\Application;
use app\base\Controller;
use app\models\User;
use Exception;

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

    public function actionRemove($id) {
        $users = User::getAll();
        $contains = false;
        foreach ($users as $key => $user) {
            if ($user->id == $id) {
                unset($users[$key]);
                $contains = true;
            }
        }

        if($contains == false)
            throw new Exception('No required user id.');

        $jsonData = json_encode($users, JSON_PRETTY_PRINT);
        file_put_contents(__DIR__.'\..\dataset\users.json', $jsonData);

        echo json_encode(["success" => true]);
    }
}
