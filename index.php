<?php
define("BASE_URL", "http://localhost:81/backend-recruitment-task/");

// base
require_once 'base/application.php';
require_once 'base/controller.php';
// controllers
require_once 'controllers/baseController.php';
require_once 'controllers/userController.php';
// models
require_once 'models/user.php';

$config = require __DIR__ . '/base/Config.php';

(new app\base\Application($config))->run();