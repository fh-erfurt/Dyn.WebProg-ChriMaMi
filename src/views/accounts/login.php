<link href="<?= ASSETSPATH.'designs'.DIRECTORY_SEPARATOR.'design-forms.css' ?>" rel="stylesheet">
<div class="headspace">
    <form  class="login_window" method="post">

        <h1>Login</h1>
        <label for="email_username">Email oder Benutzername<br>
            <input class="form_col_space" id="email_username" name="email"
                   value="<?= htmlspecialchars($email) ?>"
                   placeholder="ihre@mail.de"
                   type="text" required>
        </label>
        <label for="password">Passwort<br>
            <input class="form_col_space" id="password" name="password" placeholder="Passwort"
                   type="password" required>
        </label>
        <? if (!is_null($errMsg) && $errMsg === 'invalid'): ?>
        <label style="color: red">Falsches Passwort oder falsche Emailadresse!</label>
        <? endif ?>
        <input class="submit_button" id="submit_login" name="submit_login" type="submit" value="anmelden">
        <span class="login_check">
        </span>
        <a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=accounts&a=signup">Noch kein Konto?</a>
    </form>
</div>
