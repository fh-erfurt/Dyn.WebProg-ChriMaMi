<link href="<?= ASSETSPATH . 'designs' . DIRECTORY_SEPARATOR . 'design-login.css' ?>" rel="stylesheet">
<div class="headspace">
    <form action="" method="post" class="registration_window";>
        <div class="title"><h2>Registration</h2></div>
        <div id="personalSection">
            <label style="padding-bottom: 10px" for="gender">Geschlecht:
                <select id="gender" name="gender" value="<?= htmlspecialchars($_POST['firstname'] ?? '') ?>>
                    <option value=" u">divers</option>
                <option value="m">männlich</option>
                <option value="f">weiblich</option>
                </select>
            </label>
            <label for="firstname">Vorname
                <input type="text" class="form_col_space" id="firstname" name="firstname"
                       value="<?= htmlspecialchars($_POST['firstname'] ?? '') ?>"
                       autocomplete="on" required>
            </label>
            <label for="lastname">Nachname
                <input type="text" class="form_col_space" id="lastname" name="lastname"
                       value="<?= htmlspecialchars($_POST['lastname'] ?? '') ?>"
                       autocomplete="on" required>
            </label>
            <label for="email">Email
                <input type="email" class="form_col_space" id="email" name="email"
                       value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                       autocomplete="on" required>
            </label>
            <label for="birthday">Geburtsdatum
                <input type="date" class="form_col_space" id="birthday" name="birthday"
                       value="<?= htmlspecialchars($_POST['birthday'] ?? '') ?>"
                       required>
            </label>
            <label for="password">Passwort
                <input type="password" class="form_col_space" id="password" name="password"
                       value="<?= htmlspecialchars('') ?>" required>
            </label>
            <label for="repeatPassword">Passwort wiederholen
                <input type="password" class="form_col_space" id="repeatPassword" name="repeatPassword"
                       value="<?= htmlspecialchars('') ?>" required>
            </label>
        </div>

        <div id="addressSection">
            <label for="street" style="padding-top: 26px">Straße
                <input type="text" class="form_col_space" id="street" name="street"
                       value="<?= htmlspecialchars($_POST['street'] ?? '') ?>"
                       autocomplete="on" required>
            </label>
            <label for="houseNumber">Hausnummer <br>
                <input type="text" class="form_col_numbers" id="houseNumber" name="houseNumber"
                       value="<?= htmlspecialchars($_POST['houseNumber'] ?? '') ?>"
                       autocomplete="on" required>
            </label>
            <label for="city">Ort
                <input type="text" class="form_col_space" id="city" name="city"
                       value="<?= htmlspecialchars($_POST['city'] ?? '') ?>"
                       autocomplete="on" required>
            </label>
            <label for="zip">Postleitzahl <br>
                <input type="text" class="form_col_numbers" id="zip" name="zip"
                       value="<?= htmlspecialchars($_POST['zip'] ?? '') ?>"
                       autocomplete="on" required>
            </label>
            <div id="submitSection" style="margin-top: 21px">
                <input id="submitLogin" type="submit" class="submit_button" name="signUp" value="registrieren">
            </div>
        </div>
    </form>
</div>
<!--
<script>
    var refRedirect = document.getElementById("submitLogin");
    refRedirect.addEventListener("submit", redirectTimeOut);
    function redirectTimeOut () {
        window.open("index.php?c=pages&a=redirecttimeout");
        alert("huhu");
    }
</script>-->