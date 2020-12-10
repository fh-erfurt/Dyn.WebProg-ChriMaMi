<?php
session_save_path(__DIR__ . DIRECTORY_SEPARATOR . './data/sessions');
session_start();

require_once './core/config.php';
require_once './core/functionsLogIn.php';

$loggedIn = false;

if (isset($_POST['submit_login'])) {
    $error = true;
    $user = logIn($error);
    if (!$error) {
        $_SESSION['user'] = $user;
    }
}
else if (isset($_POST['submit_logout']))
{
    logOut();
}
else if (isset($_COOKIE['userId']))
{
    $error = true;
    $user = logIn($error, true);
    if(!$error)
    {
        $_SESSION['user'] = $user;
    }
}

$loggedIn = isset($_SESSION['user']);


$page = isset($_GET['p']) ? $_GET['p'] : 'main';
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>IB-Patrick Horsch</title>
    <link href="<?=ROOTPATH.'/assets/roboto/font.css'?>" rel="stylesheet">
    <link href="<?=ROOTPATH.'/assets/design/design-index.css'?>" rel="stylesheet">
    <link href="<? ROOTPATH.'/assets/design/design-members.css' ?>" rel="stylesheet">
</head>
<body>
<?
    if($loggedIn)
    {
        include VIEWPATH.'memberArea.php';
    }
/*    else if(isset($_POST['submit_login']) && $error == true)
    {
        include VIEWPATH.'pages/site.php';
    }*/
    else
    {
        include VIEWPATH.'site.php';
    }

?>
</body>
</html>

