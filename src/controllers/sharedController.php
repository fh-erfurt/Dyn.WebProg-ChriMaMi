<?php


namespace dwp\controller;


class SharedController extends \dwp\core\Controller
{
    function actionAdminNav() {

    }

    function actionFooter() {

    }

    function actionHeader() {

    }

    function actionSubNav() {
        if(isset($_GET) && $_GET['search'] == '123'){
            echo "Good Work";
            exit();
        }
        redirect('index.php?c=shop&a=categories');
    }

}