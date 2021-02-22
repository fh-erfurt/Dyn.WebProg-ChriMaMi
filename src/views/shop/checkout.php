<link href="<?= ASSETSPATH . 'designs' . DIRECTORY_SEPARATOR . 'design-products.css' ?>" rel="stylesheet">

<?
$customer = getCustomer($_SESSION['id']);
$address = getAddress($customer->addresses_id);
?>

<section class="checkoutDisplay">
    <div class="approvedBox">
        <h1>Vielen Dank für Ihre Bestellung!</h1>
    </div>
    <div class="orderDetails">
        <h2>Ihre Bestellung</h2>
        <? foreach ($cart_view as $ware) :?>
            <section class="cartItem">
                <img src="<?= ASSETSPATH . 'images'. DIRECTORY_SEPARATOR. 'products'. DIRECTORY_SEPARATOR.$ware->filename?>" alt="<?=$ware->alt_text?>">
                <div class="descriptionAll">
                    <p><?=$ware->p_name?></p>
                    <ul>
                        <li>Stk.-Preis: <?=number_format($ware->std_price)?>€</li>
                        <li class="price">Gesamtpreis: <?=number_format($ware->total_price)?>€</li>
                    </ul>
                </div>
                <div class="counter">
                    <div class="box" data-type="decrease" id="leftBox"><a>-</a></div>
                    <div class="box" data-type="amount"   id="centerBox"><a><?=$ware->amount?></a></div>
                    <div class="box" data-type="increase" id="rightBox"><a>+</a></div>
                </div>
                <div class="iconImg">
                    <a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=shop&a=remove&product=<?=$ware->products_id?>&amount<?=$ware->amount?>">
                        <img src="<?= ASSETSPATH . 'icons' . DIRECTORY_SEPARATOR . 'trash.png' ?> " alt="Entfernen"/>
                    </a>
                </div>
            </section>
            <hr/>
        <? endforeach;?>
    </div>
    <div class="informationDisplay">
        <div>
            <h2>Ihre Empfängerdaten</h2>
            <div class="customerInformation">
                <ul>Vorname:<?= $customer->firstname ?></ul>
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
        <button class="btn">Einkauf fortsetzen</button>
        <button class="btn">Abmelden</button>
    </div>
</section>