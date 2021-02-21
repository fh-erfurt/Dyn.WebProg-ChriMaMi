<div id="administration-wraper">
    <? require_once SHAREDPATH . 'adminnav.php'; ?>

    <?
    $customer = getCustomer($_SESSION['id']);
    $address = getAddress($customer->addresses_id);
    ?>


    <main>
        <form class="mydataFlex" name="mydata" action="">
        <!--<section>-->
            <div class="leftSite">
            <label for="firstname"> Vorname:</label>
                    <input type="text" name="firstname" id="firstname" value='<? echo $customer->firstname ?>'>

                <label for="lastname"> Nachname:</label>
                    <input type="text" name="lastname" id="lastname" value='<? echo $customer->lastname ?>'>


                <label for="city"> email:</label>
                    <input type="text" name="email" id="email"
                           value='<? echo $_SESSION['email'] ?>'>

            <label for="phone"> Telefonnummer: </label>
                <input type="text" name="phone" id="phone" value='<? echo $customer->phone ?>'>
            </div>
            <div class="rightSite">
                    <label for="street"> Straße: </label>
                        <input type="text" name="street" id="street" value='<? echo $address->street ?>'>


            <label for="house_number"> Nummer:</label>
                <input type="text" name="house_number" id="house_number" value='<? echo $address->house_number ?>'>

            <label for="city"> Stadt:</label>
                <input type="text" name="city" id="city" value='<? echo $address->city ?>'>

            <label for="zip"> zip:</label>
                <input type="text" name="zip" id="zip" value='<? echo $address->zip ?>'>
            </div>
            <p>
            <div class="mydataBtn">
            <button class="btn" type="submit" name="override" value="input_changeAccountDetails">Änderungen
                übernemen
            </button>
            <button class="btn" type="submit" name="contact" value="input_changeAccountPassword">Neues Passwort
                anfordern
            </button>
            <div class="delete">
            <button class="btn" type="submit" name="delete" value="input_deleteAccount">Account löschen</button>
            </div>
            </div>
            </p>
        <!--</section>-->
        </form>
    </main>
</div>

