<link href="<?=ROOTPATH.'/assets/design/design-login.css'?>" rel="stylesheet">
<form class="login_window" method="get">
    <h1>Login</h1>
    <label for="email_username">Email oder Benutzername<br>
        <input class="form_col_space" id="email_username" name="input_email_username"
               placeholder="ihre@mail.de"
               type="text">
    </label>
    <label for="password">Passwort<br>
        <input class="form_col_space" id="password" name="input_password" placeholder="Passwort"
               type="password">
    </label>
    <input class="submit_button" id="submit_login" name="submit_login" type="submit" value="anmelden">
    <span class="login_check">
    <input id="remain_signed_in_check" name="remain_signed_in" type="checkbox">

    <label for="remain_signed_in_check">Angemeldet bleiben?</label>
    <a href="./signup.html">Noch kein Konto?</a>
    </span>
</form>
