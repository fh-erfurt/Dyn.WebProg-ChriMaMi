<header>

    <nav class="box">
        <ul class="navigation">
            <li class="logo"><img src="<?=ROOTPATH.'/assets/logo/logo.png'?>" alt="Logo"></li>
            <li><a href="<?=$_SERVER['SCRIPT_NAME']?>/?p=main">Home</a></li>
            <li><a href="<?=$_SERVER['SCRIPT_NAME']?>/?p=login" class="submitLogout">Login</a></li>
            <li><a href="<?=$_SERVER['SCRIPT_NAME']?>/?p=forms">Kontaktformular</a></li>
        </ul>
    </nav>
    <div class="circle"></div>
</header>
<main>

    <?
    switch($page)
    {
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