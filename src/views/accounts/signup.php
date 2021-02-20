<link href="<?= ASSETSPATH . 'designs' . DIRECTORY_SEPARATOR . 'design-forms.css' ?>" rel="stylesheet">
<div class="headspace">
    <form action="" method="post" class="form_window" id="signUpForm">
        <div class="title"><h2>Registration</h2></div>
        <div id="personalSection">
            <label style="padding-bottom: 10px" for="gender">Geschlecht:
                <select id="gender" name="gender" value=<?= htmlspecialchars($_POST['firstname'] ?? '') ?>>
                    <option value="u">divers</option>
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
            <div id="errorPassword"></div>
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
                <input id="submit" type="submit" class="submit_button" name="signUp" value="registrieren"
                       style="cursor: pointer">
            </div>
        </div>
    </form>
</div>
<!--<script src="/src/assets/javascripts/validationSignUp.js"></script>
-->
<script>
    document.addEventListener('DOMContentLoaded', function () {

        var inputFirstName = document.getElementById('firstname');
        var inputLastName = document.getElementById('lastname');
        var inputEmail = document.getElementById('email');
        var inputBirthDate = document.getElementById('birthday');
        var inputPassword = document.getElementById('password');
        var repeatPassword = document.getElementById('repeatPassword');


        let error = true;
        console.log('Error: ' + error);

        if (inputPassword) {

            inputPassword.addEventListener('keyup', function () {
                var regexPw1 = /^((?=.*?[A-Z].*?)(?=.*?[a-z].*?)(?=.*?[0-9].*?)).{6,}$/m;
                var regexPw2 = /^(?=.*?[A-Z].*?)(?=.*?[a-z].*?[a-z])(?=.*?[0-9].*?[0-9])(?=.*?[^\w\s].*?).{8,}$/m;
                var regexPw3 = /^(?=.*?[A-Z].*?[A-Z])(?=.*?[a-z].*?[a-z])(?=.*?[0-9].*?[0-9])(?=.*?[^\w\s].*?[^\w\s]).{12,}$/m;
                var string = this.value;


                if (string.match(regexPw3)) {
                    inputPassword.style.border = '2px solid green';
                } else if (string.match(regexPw2)) {
                    inputPassword.style.border = '2px solid yellow';
                } else if (string.match(regexPw1)) {
                    inputPassword.style.border = '2px solid orange';
                } else {
                    inputPassword.style.border = '2px solid red';
                    /*return error = true;*/
                }
            });
        }

        if (repeatPassword) {
            let container = document.getElementById('errorPassword');
            repeatPassword.addEventListener('keyup', function () {
                if (inputPassword.value === repeatPassword.value) {
                    repeatPassword.style.border = '2px solid green';
                    error = false;
                    container.innerHTML = '';
                } else {
                    repeatPassword.style.border = '2px solid red';
                    error = true;
                    container.style.color = 'red';
                    container.innerHTML = 'Ungleiche Passwörter';
                }
                console.log('Error: ' + error);
            });
        }


        document.getElementById('signUpForm').onsubmit = function (event) {
            if (error !== false) {
                event.preventDefault()
                alert('Bitte füllen Sie die Anmeldung korrekt aus!');
            }
        }

        if (inputFirstName) {
            inputFirstName.addEventListener('keyup', function () {
                    const regExName = /^(([a-zA-Z]{2,})+(([\-]){1})*)*$/m;

                    if (inputFirstName.value.match(regExName)) {
                        inputFirstName.style.border = '2px solid green';
                        error = false;
                    } else {
                        inputFirstName.style.border = '2px solid red';
                    }
                }
            );

        }
        /*
                function validate(event) {
                    event.preventDefault();
                }
        */

    });


</script>