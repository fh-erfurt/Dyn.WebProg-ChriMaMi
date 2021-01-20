<link href="<?= ASSETSPATH.'designs'.DIRECTORY_SEPARATOR.'design-products.css' ?>" rel="stylesheet">
<div class="secondNavigation">
    <!--    <nav class="secondNavigation">>-->
    <? require_once SHAREDPATH.'subnav.php' ?>
</div>
<section>
    <h1>Filterung nach Kategorien</h1>
</section>
<div class="categories">
    <form method="get">
        <input type="hidden" name="c" value="shop" />
        <input type="hidden" name="a" value="categories" />

        <button class="button" type="submit">Alle</button>
        <button class="button" type="submit" name="cat" value="fire_protection">Brandschutz</button>
        <button class="button" type="submit" name="cat" value="heat_protection">Wärmeschutz</button>
        <button class="button" type="submit" name="cat" value="structural_planning">Tragewerksplanung</button>
        <button class="button" type="submit" name="cat" value="input_planning">Eingabeplanung</button>
    </form>
</div>

<div id="itemDisplay">
<?php

$products = $products ?? array(); // products are initiated in action

foreach ($products as $product) {
    ?><div class="item">
    <article>
        <img src="<?= ASSETSPATH . 'images' . DIRECTORY_SEPARATOR. 'products'. DIRECTORY_SEPARATOR. $product->filename ?>" width=200" height="100" alt="item">
        <b><?= $product->name;?></b>
        <?=$product->description; ?>

        <div>
            <button class="btn">Add to Cart</button>
        </div>
    </article>
    </div>
    <?php
}
?>
</div>


