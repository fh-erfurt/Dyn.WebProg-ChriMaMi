<link href="<?= ASSETSPATH . 'designs' . DIRECTORY_SEPARATOR . 'design-forms.css' ?>" rel="stylesheet">
<div class="headspace">
    <form action="" method="post" class="form_window">
        <div class="title"><h2>Kontaktformular</h2></div>
        <div id="personalSection">
            <label for="name"> Name
                <input type="text" class="form_col_space" id="name" name="name" required>
            </label>
            <label for="email"> Email-Adresse
                <input type="email" class="form_col_space" id="email" name="email" required>
            </label>
            <label for="reason"> Welchen Grund hat ihre Anfrage?
                <select name="reason" id="reason" id="reason" value="1" class="form_col_space">
                    <option>Bitte wählen</option>
                    <option>Frage zu unseren Produkten</option>
                    <option>Frage zu unseren Leistungen</option>
                    <option>Sonstige Frage</option>
                </select>
            </label>
            <label for="submit">
                <input id="submit" type="submit" name="send" value="absenden" class="submit_button">
            </label>
        </div>
        <div id="addressSection"
            <label for="description">Ihre Nachricht
                <textarea id="description" name="text" cols="35" rows="9" required></textarea>
            </label>
        </div>
    </form>
</div>
