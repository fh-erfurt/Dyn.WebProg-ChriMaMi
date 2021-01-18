<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */

namespace dwp\controller;

class ErrorsController extends \dwp\core\Controller
{

    public function actionError404()
    {
        $errorMessage = 'Unknown error, please check your code!';

        if(isset($_GET['error']))
        {
            switch($_GET['error'])
            {
                case 'nonaction':
                    $errorMessage = 'Action konnte nicht gefunden werden.';
                    break;
                case 'nocontroller':
                    $errorMessage = 'Controller konnte nicht gefunden werden.';
                    break;
                case 'viewpath':
                    $errorMessage = 'View konnte nicht gefunden werden.';
                    break;
            }
        }

        // though the error message variable to the view, so we can show it to our customers
        $this->setParam('errorMessage', $errorMessage);
    }

    public function actionErrorLogin ()
    {
        $errorLoginMessage = 'Unknown error, please check your code!';

        if(isset($_GET['error']))
        {
            switch ($_GET['error'])
            {
                case 'emptyinput':
                    $errorLoginMessage = "Please input username and password!";
                    break;
                case 'stmtfailed':
                    $errorLoginMessage = "Wrong email or password!";
                    break;
                case 'accfailed':
                    $errorLoginMessage = "No user found! Please sign up!";
            }
        }
        $this->setParam('errorLoginMessage', $errorLoginMessage);
    }
}