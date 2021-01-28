<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */

namespace dwp\controller;


class PagesController extends \dwp\core\Controller
{

    public function actionIndex()
    {

        /*        if($this->loggedIn())
                {
                    // TODO: Retrieve account which is logged in

                    // TODO: Set the correct name of the current user here
                    $this->setParam('name', 'unkown');

                    // TODO: retrieve and set the marks of the current user
                    $this->setParam('marks', []);

                }
                else
                {
                    header('Location: index.php?c=pages&a=login');
                    exit(0);
                }*/

    }

    public function actionMain()
    {

    }

    public function actionProducts()
    {

    }

    public function actionImprint()
    {

    }

    public function actionSignup()
    {
        /*        echo "<pre>", var_dump($_POST), "</pre>";
                $this->setParam("register_firstname", $_POST["register_firstname"]);*/
    }


    public function actionAboutUs()
    {

    }

    public function actionAdministration()
    {

    }

    public function actionNews()
    {

    }

}


    /*public function actionSignup()
    {
        // store error message
        $errMsg = null;

        // TODO: Handle Inputfields for account

        // check user send login field
        if(isset($_POST['submit']))
        {

            // TODO: Validate and create account in database if possible


            // if there is no error reset mail
            if($errMsg === null)
            {
                // TODO: Redirect to login
            }

        }

        $this->setParam('errMsg', $errMsg);

        // TODO: Set params for account

    }*/

    /*public function actionLogout()
    {
        session_destroy();
        header('Location: index.php?c=pages&a=login');
    }*/
/*}*/