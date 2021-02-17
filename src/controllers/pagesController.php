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

    public function actionRedirectTimeOut()
    {

    }

    public function actionContact()
    {
        $values = array(
            'name' => isset($_POST['name']) ? $_POST['name'] : "",
            'email' => isset($_POST['email']) ? $_POST['email'] : "",
            'reason' => isset($_POST['reason']) ? $_POST['reason'] : "",
            'description' => isset($_POST['description']) ? $_POST['description'] : ""
        );


        /*        $reciever = 'ibhorsch@web.de';
                $betreff = $values->reason;
                $nachricht = $values->description;
                $header = array(
                    'From' => 'webmaster@ibhorsch.de',
                    'x-mailer' => 'PHP/' . phpversion()
                );

                mail($reciever, $betreff, $nachricht, $header);*/
        /** Für das verwenden existiert noch kein SMTP-Server, dieser Folgt später */
        if (isset($_POST['send'])) {
            redirect("index.php?c=pages&a=redirecttimeout&o=mail");
        }

    }


}


/*public function actionSignup()
{
    // store error message
    $errMsg = null;

    // TODO: Handle Inputfields for account

    // check user send login field
    if(isset($_POST["submit']))
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