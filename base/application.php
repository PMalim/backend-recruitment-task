<?php
namespace app\base;

use Exception;

class Application
{
    public array|null $config = null;

    /**
     * Application constructor.
     * @param $config
     */
    public function __construct($config) {
        $this->config = $config;
        self::$self = $this;
    }

    /**
     * Run application that runs our mvc model
     * @throws Exception
     */
    public function run() {
        $url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';

        if ($url == '/')
            $url = ["base", "index"];

        if(count($url) == 1)
            $url = [$url[0], "index"];

        $url[0] = ucfirst(strtolower($url[0]));
        $url[1] = ucfirst(strtolower($url[1]));

        $className = $url[0].'Controller';
        if(file_exists('controllers/'.$className.'.php')){
            Controller::run($className, $url[1]);
        }else
            throw new Exception('No access. '.__DIR__.'../controllers/'.ucfirst($url[0]).'Controller.php');
    }

    /**
     * Returns configuration file
     * @return array
     */
    public static function getConfiguration(): array {
        return self::$self->config;
    }

    /**
     * Render default layout
     * @param $html
     */
    public static function render($html) {
        ob_start();
        include 'wwwrot/index.php';
        $html = ob_get_clean();
        echo $html;
    }

    public static Application|null $self = null;
}
