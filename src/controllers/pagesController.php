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

        // todo: implement mail-server later

        /*      $reciever = 'ibhorsch@web.de';
                $betreff = $values->reason;
                $nachricht = $values->description;
                $header = array(
                    'From' => 'webmaster@ibhorsch.de',
                    'x-mailer' => 'PHP/' . phpversion()
                );
                mail($reciever, $betreff, $nachricht, $header);*/

        if (isset($_POST['send'])) {
            redirect("index.php?c=pages&a=redirecttimeout&o=mail");
        }

    }


}


