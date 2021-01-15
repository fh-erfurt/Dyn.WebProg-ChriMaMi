<link href="<?= ASSETSPATH . 'designs'.DIRECTORY_SEPARATOR.'design-login.css' ?>" rel="stylesheet">
<div class="headspace">
    <form action="" method="post" class="registration_window" ;>
        <h1>Registration</h1>
        <div id="personalSection">
            <label style="padding-bottom: 10px" for="gender">Geschlecht:
                <select id="gender" name="register_gender">
                    <option value="diverse">---</option>
                    <option value="male">Herr</option>
                    <option value="female">Frau</option>
                </select>
            </label>
            <label for="firstName">Vorname:
                <input type="text" class="form_col_space" id="firstName" name="register_firstname" value="<?= htmlspecialchars($_POST['firstName'] ?? '') ?>"
                       autocomplete="on" required>
            </label>
            <label for="lastName">Nachname:
                <input type="text" class="form_col_space" id="lastName" name="register_lastname" value="<?= htmlspecialchars($_POST['lastName'] ?? '') ?>"
                       autocomplete="on" required>
            </label>
            <label for="mail">Email:
                <input type="email" class="form_col_space" id="mail" name="register_mail" value="<?= htmlspecialchars($_POST['mail'] ?? '') ?>"
                       autocomplete="on" required>
            </label>
            <label for="birthday">Geburtsdatum:
                <input type="date" class="form_col_space" id="birthday" name="register_birthday" value="<?= htmlspecialchars($_POST['birthday'] ?? '') ?>"
                       required>
            </label>
        </div>
        <div id="addressSection">
            <label for="street">Straße:
                <input type="text" class="form_col_space" id="street" name="register_street" value="<?= htmlspecialchars($_POST['street'] ?? '') ?>"
                       autocomplete="on" required>
            </label>
            <label for="number">Hausnummer: <br>
                <input type="text" class="form_col_numbers" id="number" name="register_number" value="<?= htmlspecialchars($_POST['number'] ?? '') ?>"
                       autocomplete="on" required>
            </label>
            <label for="city">Ort:
                <input type="text" class="form_col_space" id="city" name="register_city" value="<?= htmlspecialchars($_POST['city'] ?? '') ?>"
                       autocomplete="on" required>
            </label>
            <label for="zip">Postleitzahl: <br>
                <input type="text" class="form_col_numbers" id="zip" name="register_zip" value="<?= htmlspecialchars($_POST['zip'] ?? '') ?>"
                       autocomplete="on" required>
            </label>
        </div>
        <div id="passwordSection">
            <label for="password">Passwort:
                <input type="password" class="form_col_space" id="password" name="register_password" required>
            </label>
            <label for="repeatPassword">Passwort wiederholen:
                <input type="password" class="form_col_space" id="repeatPassword" name="register_repeatPassword" required>
            </label>
        </div>
        <div id="submitSection">
            <input type="submit" class="submit_button" name="signUp_submit" value="registrieren">
        </div>
    </form>
</div>