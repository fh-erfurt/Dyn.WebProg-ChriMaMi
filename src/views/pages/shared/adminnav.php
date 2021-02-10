<?php
if (isset($_SESSION['email']) && $_SESSION['isAdmin'] == 1) {
    echo '<h2>Administration</h2>';
} else {
    echo '<h2>Mein Konto</h2>';
}

?>
<div class="menubar">
    <?php
    echo '<li><a href="' . $_SERVER['SCRIPT_NAME'] . '?c=administration&a=mydata">Mein Konto</a></li>';
    if (isset($_SESSION['email']) && $_SESSION['isAdmin'] == 1) {
        echo '<li><a href="' . $_SERVER['SCRIPT_NAME'] . '?c=administration&a=usermanagement">Accounts verwalten</a></li>';
    } else if (isset($_SESSION['email']) && $_SESSION['isAdmin'] == 0) {
        echo '<li><a href="' . $_SERVER['SCRIPT_NAME'] . '?c=administration&a=myorders">Meine Aufträge</a></li>';
    }
    echo '<li><a href="' . $_SERVER['SCRIPT_NAME'] . '?c=accounts&a=logout">Logout</a></li>';
    ?>
</div>