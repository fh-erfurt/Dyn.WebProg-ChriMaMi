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
                case 'noAction':
                    $errorMessage = 'Action konnte nicht gefunden werden.';
                    break;
                case 'noController':
                    $errorMessage = 'Controller konnte nicht gefunden werden.';
                    break;
                case 'noViewPath':
                    $errorMessage = 'View konnte nicht gefunden werden.';
                    break;
            }
        }

        // though the error message variable to the view, so we can show it to our members
        $this->setParam('errorMessage', $errorMessage);
    }
}
