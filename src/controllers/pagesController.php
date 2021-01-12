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
        echo "<pre>", var_dump($_POST), "</pre>";
        $this->setParam("register_firstname", $_POST["register_firstname"]);
    }

    public function actionCategories()
    {

    }

    public function actionSale()
    {

    }

    public function actionCart()
    {

    }

    public function actionLogin()
    {
        // store error message
        $errMsg = null;

        // retrieve inputs
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        // check user send login field
        if(isset($_POST['submit']))
        {

            // TODO: Validate input first
            // TODO: Check login values with database accounts
            // TODO: Store useful variables into the session like account and also set loggedIn = true
            $db = $GLOBALS['db'];

            $login = \dwp\model\Login::findOne('username = '.$db->quote($username));

            if($login !== null && password_verify($password, $login->passwordHash))
            {
                echo "login success";
            }
            else
            {
                $errMsg = 'Nutzer oder Passwort nicht korrekt.';
            }

            // if there is no error reset mail
            if($errMsg === null)
            {
                $username = '';
            }

        }

        // set param email to prefill login input field
        $this->setParam('username', $username);
        $this->setParam('errMsg', $errMsg);
        $this->setParam('test', 'Hello World!');
    }

/*    public function actionSignup()
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

    public function actionLogout()
    {
        session_destroy();
        header('Location: index.php?c=pages&a=login');
    }
}