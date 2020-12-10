<header>
    <nav class="box">
        <ul class="navigation">
            <li class="logo"><img src="<?=ROOTPATH.'/assets/logo/logo.png'?>" alt="Logo"></li>
            <li><a href="<?=$_SERVER['SCRIPT_NAME']?>/?p=forms">Kontaktformular</a></li>
            <li><a href="<?=$_SERVER['SCRIPT_NAME']?>/?p=main">Home</a></li>
        </ul>
        <form action="<?= $_SERVER['PHP_SELF'] . '?p=main';?>" method="post" >
            <input class="submitLogout" id="submitLogout" type="submit" name="submit_logout" value = "logout";>
        </form>
    </nav>
    <div class="circle"></div>
</header>
<main>

    <?
    switch($page)
    {
        case 'landing':
            include (VIEWPATH.'/pages/welcomeMember.php');
            break;
        case 'forms':
            include (VIEWPATH.'/pages/forms.php');
            break;
        case 'login':
            include (VIEWPATH.'/pages/login.php');
            break;
        case 'main':
            include (VIEWPATH.'/pages/main.php');
            break;
        default:
            echo 'Error 404';
            break;
    }
    ?>

</main>
<footer>

</footer>

<!DOCTYPE html>
<html>
<head>
    <title> </title>
</head>
<!--    <body>
    <?/* include VIEWPATH.'site.php'; */?>
        <div style="text-align: center">
            <h1>This is a TestPage for the LoggedId - Area</h1>
            <p>
                Here should be included the member area with the same header
                and features for admin tasks
            </p>
        </div>
    </body>-->
</html>