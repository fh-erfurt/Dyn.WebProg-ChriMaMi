<link href="<?= ASSETSPATH.'designs'.DIRECTORY_SEPARATOR.'design-products.css' ?>" rel="stylesheet">
<div class="secondNavigation">
    <!--    <nav class="secondNavigation">>-->
    <ul class="secondNavigation">
        <li><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=pages&a=sale">Aktuelle Angebote</a></li>
        <li><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=pages&a=categories">Kategorien</a></li>
        <li><label for="suche"></label><input type="search" id="suche" placeholder="  Suche"></li>
        <li><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=pages&a=cart">Warenkorb</a></li>
    </ul>
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
