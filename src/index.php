<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */

// load needed variables/defines/configs
require_once 'config/init.php';
require_once 'config/database.php';

// load core stuff
require_once COREPATH . 'functions.php';
require_once COREPATH . 'controller.class.php';
require_once COREPATH . 'model.class.php';


// load all models
foreach (glob(MODELSPATH . '*.php') as $modelfiles) {
    require_once $modelfiles;
}

require_once 'core/functionsLogIn.php';


// start session to handle login
session_save_path('data/sessions');
session_start();

// check which controller should be loaded
$controllerName = 'pages';
$actionName = 'main';


// check a controller is given
if (isset($_GET['c'])) {
    $controllerName = $_GET['c'];
}

// check an action is given
if (isset($_GET['a'])) {
    $actionName = $_GET['a'];
}

// check controller/class and method exists
if (file_exists(CONTROLLERSPATH . $controllerName . 'Controller.php')) {
    // include the controller file
    require_once CONTROLLERSPATH . $controllerName . 'Controller.php';

    // generate the class name of the controller using the name extended by Controller
    // also add the namespace in front
    $className = '\\dwp\\controller\\' . ucfirst($controllerName) . 'Controller';

    // generate an instace of the controller using the name, stored in $className
    // it is the same like calling for example: new \dwp\controller\PagesController()
    $controller = new $className($controllerName, $actionName);

    // checking the method is available in the controller class
    // the method looks like: actionIndex()
    $actionMethod = 'action' . ucfirst($actionName);
    if (!method_exists($controller, $actionMethod)) {
        // redirect to error page 404 because not found
        redirect('index.php?c=errors&a=error404&error=noAction');
    } else {
        // call the action method to do the job
        // so the action cann fill the params for the views which will be used
        // in the render process later
        $controller->{$actionMethod}();
    }
} else {
    // redirect to error page 404 because not found
    redirect('index.php?c=errors&a=error404&error=noController');
}


?>


<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IB-Patrick Horsch</title>

        <link href="<?= ASSETSPATH . 'ubuntu' . DIRECTORY_SEPARATOR . 'stylesheet.css' ?>" rel="stylesheet">
        <link href="<?= ASSETSPATH . 'vollkorn' . DIRECTORY_SEPARATOR . 'stylesheet.css' ?>" rel="stylesheet">
        <link href="<?= ASSETSPATH . 'designs' . DIRECTORY_SEPARATOR . 'design-index.css' ?>" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@400;500;600;700&family=Raleway:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="page-container">
            <? require_once SHAREDPATH . "header.php" ?>
            <div id="content-wrap">
                <?php

                // this method will render the views of the called action
                // for this the the file in the views directory will be included
                $controller->render();
                ?>
            </div>
            <? require_once SHAREDPATH .  "footer.php" ?>
        </div>
    </body>
</html>