<?php

use dwp\model\Products as Products;

if (!file_exists(ASSETSPATH . 'JSON/products.json')) {
    $allProducts = Products::find();
    foreach ($allProducts as $key => $value) {
        $jsonArray[$key] = array(
            $allProducts[$key]->name => array(
                'category' => $allProducts[$key]->category,
                'deascription' => $allProducts[$key]->description,
                'std_price' => $allProducts[$key]->std_price,
                ''
            )
        );
    }
    $json = json_encode($jsonArray);
    $file = file_put_contents(ASSETSPATH . 'JSON/products.json', $json);
} else {
/*    echo 'Datei existiert bereits';*/
}
?>
<script src="<?= ASSETSPATH.'javascripts'.DIRECTORY_SEPARATOR.'shop.js' ?>" type="text/javascript"></script>

<div class="secondNavigation">
    <!--    <nav class="secondNavigation">>-->
    <ul class="secondNavigation">
        <li>
            <div class="text"><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=pages&a=contact">Kontaktaufnahme</a></div>
        </li>
        <li>
            <div class="text"><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=shop&a=categories">Shop</a></div>
        </li>
        <li><label for="search">
                <!--<form name="searchbar" action="">-->
            </label><input type="search" id="search" placeholder="  Suche"></form></li>
        <!--<input id="searchSubmit" style="display:none">-->
        <li>
            <div class="icon"><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=shop&a=cart"><img
                            src="<?= ASSETSPATH . 'icons' . DIRECTORY_SEPARATOR . 'checkoutCart.png' ?>"/></a></div>
        </li>
    </ul>
</div>



