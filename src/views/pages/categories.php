<link href="<?= ASSETSPATH.'designs'.DIRECTORY_SEPARATOR.'design-products.css' ?>" rel="stylesheet">
<div class="secondNavigation">
    <!--    <nav class="secondNavigation">>-->
    <? require_once SHAREDPATH.'subnav.php' ?>
</div>
<section>
    <h1>Filterung nach Kategorien</h1>
</section>
<div class="categories">
    <button class="button">Alle</button>
    <button class="button">Brandschutz</button>
    <button class="button">Wärmeschutz</button>
    <button class="button">Tragewerksplanung</button>
    <button class="button">Eingabeplanung</button>
</div>

<div id="itemDisplay">
<?php
$itemNumber = 0;

foreach (glob(ASSETSPATH . 'images'. DIRECTORY_SEPARATOR .'products'. DIRECTORY_SEPARATOR. '*.jpg') as $img) {
    ?><div class="item">
    <article>
        <?  $itemNumber++ ?>
        <img src="<?= ASSETSPATH . 'images' . DIRECTORY_SEPARATOR. 'products'. DIRECTORY_SEPARATOR. 'item'. $itemNumber.'.jpg' ?>" width=200" height="100" alt="item">
        <? require ASSETSPATH . 'texts' . DIRECTORY_SEPARATOR. 'item'.$itemNumber.'.php'?>
        <div>
            <button class="btn">Add to Cart</button>
        </div>
    </article>
    </div>
    <?php
}
?>
</div>


