<link href="<?= ASSETSPATH . 'designs' . DIRECTORY_SEPARATOR . 'design-products.css' ?>" rel="stylesheet">

<?
$customer = getCustomer($_SESSION['id']);
$address = getAddress($customer->addresses_id);
?>

<section class="checkoutDisplay">
    <div class="approvedBox">
    </div>
    <div class="orderDetails">
        <h2>Ihre Bestellung</h2>
        <? foreach ($cart_view as $ware) :?>
            <section class="cartItem">
                <div><img src="<?= ASSETSPATH . 'images'. DIRECTORY_SEPARATOR. 'products'. DIRECTORY_SEPARATOR.$ware->filename?>" alt="<?=$ware->alt_text?>"></div>
                <p><?=$ware->p_name?></p>
                <div class="descriptionAll">
                    <ul>
                        <li>Stk.-Preis: <?=number_format($ware->std_price)?>€</li>
                        <li>Menge: <?=$ware->amount?></li>
                    </ul>
                </div>
                <div class="itemPrice"><a class="price"><?=number_format($ware->total_price)?>€</a></div>
            </section>
            <hr/>
        <? endforeach;?>
        <div class="totalPrice"><a>Gesamtpreis aller Produkte: <?= number_format($result, 2) ?>€</a></div>
    </div>
    <div class="informationDisplay">
        <div>
            <h2>Ihre Empfängerdaten</h2>
            <div class="customerInformation">
                <ul>Vorname: <?= $customer->firstname ?></ul>
                <ul>Nachname: <?= $customer->lastname ?></ul>
                <ul>Email: <?= $customer->email ?></ul>
            </div>
        </div>
        <div class="address">
            <h2>Adressinformationen</h2>
            <div class="addressInformation">
                <ul>Stadt: <?= $address->city ?></ul>
                <ul>Postleitzahl: <?= $address->zip ?></ul>
                <ul>Straße: <?= $address->street ?><?= $address->house_number ?></ul>
            </div>
        </div>
    </div>
    <div class="buttonDisplay">
        <button class="btn">Kostenpflichtig bestellen</button>
        <button class="btn">Daten ändern</button>
    </div>
</section>