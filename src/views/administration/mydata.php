<div id="administration-wraper">
    <? require_once SHAREDPATH . 'adminnav.php'; ?>

    <?
    $customer = getCustomer($_SESSION['id']);
    $address = getAddress($customer->addresses_id);
    ?>


    <main>
        <section>
            <div class="dataFormLeft"
            <li><label for="firstname"> Vorname:
                    <input type="text" name="firstname" id="firstname" value='<? echo $customer->firstname ?>'>
                </label>
                <label for="lastname"> Nachname:
                    <input type="text" name="lastname" id="lastname" value='<? echo $customer->lastname ?>'>
                </label>
            </li>
            <li>
                <label for="city"> email:
                    <input type="text" name="email" id="email" style="width: 200px"
                           value='<? echo $_SESSION['email'] ?>'>
                </label>
            </li>
            <label for="phone"> Telefonnummer:
                <input type="text" name="phone" id="phone" value='<? echo $customer->phone ?>'>
            </label>
            <label for="street"> Straße:
                <input type="text" name="street" id="street" value='<? echo $address->street ?>'>
            </label>
            <label for="house_number"> Nummer:
                <input type="text" name="house_number" id="house_number" value='<? echo $address->house_number ?>'>
            </label>
            <label for="city"> Stadt:
                <input type="text" name="city" id="city" value='<? echo $address->city ?>'>
            </label>
            <label for="zip"> zip:
                <input type="text" name="zip" id="zip" value='<? echo $address->zip ?>'>
            </label>
            </form>


            <button class="btn" type="submit" name="override" value="input_changeAccountDetails">Änderungen
                übernemen
            </button>
            <button class="btn" type="submit" name="contact" value="input_changeAccountPassword">Neues Passwort
                anfordern
            </button>
            <button class="btn" type="submit" name="delete" value="input_deleteAccount">Account löschen</button>
        </section>
    </main>
</div>

