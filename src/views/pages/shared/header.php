<header>
    <div id="head_container">
        <div id="sek-head-logo">
            <img src="<?= ASSETSPATH . 'logo/logo.png' ?>" alt="Logo">
        </div>
        <div id="sek-headcontent">
            <h1>Ingenieurbüro</h1>
            <h2>Patrick Horsch</h2>
            <nav>
               <!--Only for Mobile Version-->
                <input class="menuToggle" type="checkbox" id="toggle">
                <ul class="navigation">
                    <div id="respSubNavHome" for="homeSubToggle">
                        <li><label for="homeSubToggle" class="navigation"><!--<span>-->Unternehmen<!--</span>--></label>
                            <input class="subMenuToggle" type="checkbox" id="homeSubToggle">
                            <ul class="subNavigation" >
                                <li><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=pages&a=main">Startseite</a></li>
                                <li><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=pages&a=aboutUs">Über Uns</a></li>
                                <li><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=pages&a=news">Aktuelle Projekte</a></li>
                            </ul>
                        </li>
                    </div>
                    <!--Only for Mobile Version-->

                    <li><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=shop&a=categories">Produkte</a></li>
                    <li><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=shop&a=cart">Warenkorb</a></li>
                    <?php
                    if (isset($_SESSION['email'])) {
                        echo '<li><a href="' . $_SERVER['SCRIPT_NAME'] . '?c=accounts&a=logout" class=\'submitLogout\'>Logout</a></li>';

                        if (isset($_SESSION['email']) && $_SESSION['isAdmin'] == 1) {
/*                            echo '<li><a href="' . $_SERVER['SCRIPT_NAME'] . '?c=accounts&a=administration">Administration</a></li>';*/
                            echo'<div id="respSubNav" for="subToggle">';
                            echo '<li><label for="subToggle" class="navigation"><span>Administration</span></label>';
                            echo '<input class="subMenuToggle" type="checkbox" id="subToggle">';
                            echo '<ul class="subNavigation">';
                                echo '<li><a href="#">Benutzerverwaltung</a></li>';
                            echo '</ul></li>';
                            echo '</div>';

                        } else if (isset($_SESSION['email']) && $_SESSION['isAdmin'] == 0) {
                            echo '<li><a href="' . $_SERVER['SCRIPT_NAME'] . '?c=accounts&a=userInterface">Account</a>';
                            echo '<ul>';
                            echo '<div class="submenu">';
                         /*   echo '<div>';*/
                            echo '<li><a href="' . $_SERVER['SCRIPT_NAME'] . '?c=accounts&a=logout">Logout</a></li>';
                            echo '</div>';
                            echo '<div class="bigger">';
                            echo '<li><a href="' . $_SERVER['SCRIPT_NAME'] . '?c=accounts&a=logout">Daten ändern</a></li>';
                            echo '</div>';
                            echo '</ul>';
                            echo '</li>';
                        }
                    } else {
                        /*                        echo '<li><a href="'.$_SERVER['SCRIPT_NAME'].'?c=pages&a=imprint">Impressum</a></li>';*/
                        echo '<li><a href="' . $_SERVER['SCRIPT_NAME'] . '?c=accounts&a=login" class=\'submitLogout\'>Login</a></li>';
                    }
                    ?>
                    <li><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=pages&a=imprint">Impressum</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="respNav" for="toggle">
<!--        <hr id="sek-break-line">-->
        <label for="toggle"><img src="<?= ASSETSPATH . 'icons/dropdownArrow.png' ?>" alt="Logo"></label>
        <input class="menuToggle" type="checkbox" id="toggle">
<!--        <hr id="sek-break-line">-->
    </div>
</header>
