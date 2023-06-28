<?php
namespace app\base;

class Controller
{
    public function __construct() {
    }

    public static function run($controller, $action) {
        $object = '\app\controllers\\'.$controller;
        $object = new $object();
        return $object->callMethod($action);
    }

    public function callMethod($actionName) {
        $actionName = 'action'.$actionName;
        return call_user_func_array(array($this, $actionName), $_GET);
    }

    public function render($templateName, $models = null) {
        ob_start();
        include 'views/'. $this->getName().'/'.$templateName.'.php';
        $html = ob_get_clean();

        Application::$self->render($html);
        return true;
    }

    public function redirect($tab) {
        header("Location: ".BASE_URL."/".$tab[0]."/".$tab[1]);
        exit();
        return true;
    }

    public function getName() {
        return str_replace("controller", "",strtolower((new \ReflectionClass($this))->getShortName()));
    }
}