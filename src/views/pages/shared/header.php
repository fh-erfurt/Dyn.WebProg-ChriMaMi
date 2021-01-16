<header>
    <div id="head_container">
        <div id="sek-head-logo">
            <img src="<?= ASSETSPATH . 'logo/logo.png' ?>" alt="Logo">
        </div>
        <div id="sek-headcontent">
            <h1>Ingenieurbüro</h1>
            <h2>Patrick Horsch</h2>
            <nav>
                <ul class="navigation">
                    <li><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=pages&a=main">Home</a></li>
                    <li><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=pages&a=categories">Produkte</a></li>
                    <li><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=pages&a=cart">Warenkorb</a></li>
                    <?php
                    if (isset($_SESSION['id']))
                    {
                        echo '<li><a href="'.$_SERVER['SCRIPT_NAME'].'?c=pages&a=administration">Administration</a></li>';
                        echo '<li><a href="'.$_SERVER['SCRIPT_NAME'].'?c=pages&a=logout" class=\'submitLogout\'>Logout</a></li>';
                    }
                    else
                    {
                        echo '<li><a href="'.$_SERVER['SCRIPT_NAME'].'?c=pages&a=login" class=\'submitLogout\'>Login</a></li>';
                    }
                    ?>
                    <li><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=pages&a=imprint">Impressum</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
