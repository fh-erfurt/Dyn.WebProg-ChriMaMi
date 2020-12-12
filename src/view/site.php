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
    <div class="left">
        <ul>
            <h2>IB Horsch Patrick</h2>
        </ul>
        <ul>
            <li><img src="<?=ROOTPATH.'/assets/icons/marker.png'?>" /></li>
            <li>Musterweg 01</li>
            <li>00000 Musterhausen</li>
        </ul>
        <ul>
            <li><img src="<?=ROOTPATH.'/assets/icons/phone.png'?>" /></li>
            <li> 09973 / 38 90 96-0</li>
            <li> 09973 / 38 55 98 0</li>
        </ul>
        <ul>
            <li><img src="<?=ROOTPATH.'/assets/icons/printer.png'?>" /></li>
            <li> 09843 / 38 90 96-96</li>
            <li> 09843 / 38 55 98 1</li>
        </ul>
        <ul>
            <li><img src="<?=ROOTPATH.'/assets/icons/mail.png'?>" /></li>
            <li>
                info@patrick-horsch.de
            </li>
        </ul>
    </div>
    <div class="right">
        <ul>
            <li><img src="<?=ROOTPATH.'/assets/images/googleMaps.png'?>" /></li>
        </ul>
    </div>
</footer>
