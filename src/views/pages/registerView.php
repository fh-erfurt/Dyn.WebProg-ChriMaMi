<link href="<?= ROOTPATH . '/assets/designs/designs-login.css' ?>" rel="stylesheet">
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
                <input type="text" class="form_col_space" id="firstName" name="register_firstName"
                       autocomplete="on" required>
            </label>
            <label for="lastName">Nachname:
                <input type="text" class="form_col_space" id="lastName" name="register_lastName"
                       autocomplete="on" required>
            </label>
            <label for="mail">Email:
                <input type="email" class="form_col_space" id="mail" name="register_mail"
                       autocomplete="on" required>
            </label>
            <label for="birthday">Geburtsdatum:
                <input type="date" class="form_col_space" id="birthday" name="register_birthday"
                       required>
            </label>
        </div>
        <div id="addressSection">
            <label for="street">Straße:
                <input type="text" class="form_col_space" id="street" name="register_street"
                       autocomplete="on" required>
            </label>
            <label for="number">Hausnummer: <br>
                <input type="text" class="form_col_numbers" id="number" name="register_number"
                       autocomplete="on" required>
            </label>
            <label for="city">Ort:
                <input type="text" class="form_col_space" id="city" name="register_city"
                       autocomplete="on" required>
            </label>
            <label for="zip">Postleitzahl: <br>
                <input type="text" class="form_col_numbers" id="zip" name="register_zip"
                       autocomplete="on" required>
            </label>
        </div>
        <div id="passwordSection">
            <label for="password">Passwort:
                <input type="text" class="form_col_space" id="password" name="register_password" required>
            </label>
            <label for="repeatPassword">Passwort wiederholen:
                <input type="text" class="form_col_space" id="repeatPassword" name="register_repeatPassword" required>
            </label>
        </div>
        <div id="submitSection">
            <input type="submit" class="submit_button" name="register_submit" value="registrieren">
        </div>
    </form>
</div>