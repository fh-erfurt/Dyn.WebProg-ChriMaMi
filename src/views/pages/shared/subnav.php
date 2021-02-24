<?php

use dwp\model\Products as Products;

/**
 * Funktion erstellt ein Abbild der product_view in Form einer JSON Datei
 */

if (!is_dir(ASSETSPATH . 'JSON')) {
    mkdir(ASSETSPATH . 'JSON');

    if (!file_exists(ASSETSPATH . 'JSON/products.json')) {
        $allProducts = Products::find();
        foreach ($allProducts as $key => $value) {
            $jsonArray[$key] = array(
                'id' => $allProducts[$key]->id,
                'name' => $allProducts[$key]->name,
                'description' => $allProducts[$key]->description,
                'std_price' => $allProducts[$key]->std_price,
                'picture' => $allProducts[$key]->filename,
                'alt_text' => $allProducts[$key]->alt_text,
                'category' => $allProducts[$key]->category
            );
            /*        echo var_dump($jsonArray[$key]['category']);
                    exit();*/

            switch ($jsonArray[$key]['category']) {
                case "fire_protection":
                    $jsonArray[$key]['category'] = 'Brandschutz';
                    break;
                case "heat_protection":
                    $jsonArray[$key]['category'] = 'Wärmeschutz';
                    break;
                case "structural_planning":
                    $jsonArray[$key]['category'] = 'Tragwerkplanung';
                    break;
                case "input_planning":
                    $jsonArray[$key]['category'] = 'Eingabeplaung';
                    break;
                default:
                    $jsonArray[$key]['category'] = 'Unbekannte Kategorie';
                    break;
            }
        }
        $json = json_encode($jsonArray);
        $file = file_put_contents(ASSETSPATH . 'json/products.json', $json);
    }
}
?>


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
                <form name="searchbar" id="searchForm" method="get">
            </label><input type="search" id="search" name="search" placeholder="  Suche"></form></li>
        <input id="searchSubmit" style="display:none" type="submit">
        <?php if(isset($_SESSION['email'])): ?>
        <li>
            <div class="icon"><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=shop&a=cart"><img
                            src="<?= ASSETSPATH . 'icons' . DIRECTORY_SEPARATOR . 'checkoutCart.png' ?>"/></a></div>
        </li>
        <?php endif; ?>
    </ul>
</div>



