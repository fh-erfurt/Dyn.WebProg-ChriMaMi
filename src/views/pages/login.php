<link href="<?= ASSETSPATH.'designs'.DIRECTORY_SEPARATOR.'design-login.css' ?>" rel="stylesheet">
<div class="headspace">
    <form action="<?= $_SERVER['SCRIPT_NAME'].'?c=pages&a=main'; ?>" class="login_window" method="post">

        <h1>Login</h1>
        <label for="email_username">Email oder Benutzername<br>
            <input class="form_col_space" id="email_username" name="validationEmail"
                   placeholder="ihre@mail.de"
                   type="text">
        </label>
        <label for="password">Passwort<br>
            <input class="form_col_space" id="password" name="validationPassword" placeholder="Passwort"
                   type="password">
        </label>
        <input class="submit_button" id="submit_login" name="submit_login" type="submit" value="anmelden">
        <span class="login_check">
    <input id="rememberMe" name="rememberMe" type="checkbox">
    <?= isset($_POST['rememberMe']) ? 'checked' : '' ?>
    <label for="rememberMe">Angemeldet bleiben?</label>
            <!--    <a href="./signup.html">Noch kein Konto?</a>-->
    </span>
        <a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=pages&a=registerView">Noch kein Konto?</a>
    </form>
</div>
