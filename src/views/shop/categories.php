<link href="<?= ASSETSPATH . 'designs' . DIRECTORY_SEPARATOR . 'design-products.css' ?>" rel="stylesheet">
<script src="<?= ASSETSPATH . 'javascripts' . DIRECTORY_SEPARATOR . 'counterForShop.js' ?>"
        type="text/javascript"></script>
<script src="<?= ASSETSPATH . 'javascripts' . DIRECTORY_SEPARATOR . 'shop.js' ?>" type="text/javascript"></script>
<div class="secondNavigation">
    <!--    <nav class="secondNavigation">>-->
    <? require_once SHAREDPATH . 'subnav.php' ?>
</div>
<div class="categories">
    <form method="get">
        <input type="hidden" name="c" value="shop"/>
        <input type="hidden" name="a" value="categories"/>

        <button class="btn" type="submit">Alle</button>
        <button class="btn" type="submit" name="cat" value="fire_protection">Brandschutz</button>
        <button class="btn" type="submit" name="cat" value="heat_protection">Wärmeschutz</button>
        <button class="btn" type="submit" name="cat" value="structural_planning">Tragewerksplanung</button>
        <button class="btn" type="submit" name="cat" value="input_planning">Eingabeplanung</button>
    </form>
</div>

<div id="itemDisplay">
    <?php foreach ($products as $product) : ?>
        <div class="item">
            <article>
                <img src="<?= ASSETSPATH . 'images' . DIRECTORY_SEPARATOR . 'products' . DIRECTORY_SEPARATOR . $product->filename ?>"
                     width=200" height="100" alt="item">
                <b><?= $product->name; ?></b><br>
                <?= $product->description; ?>
                <div>
                    <p>Kategorie: <?php
                        switch ($product->category) {
                            case "fire_protection":
                                echo "Brandschutz";
                                break;
                            case "heat_protection":
                                echo "Wärmeschutz";
                                break;
                            case "structural_planning":
                                echo "Tragewerksplanung";
                                break;
                            case "input_planning":
                                echo "Eingabeplanung";
                                break;
                            default:
                                echo "Unbekannte Kategorie";
                                break;
                        }

                        ?></p>
                </div>
                <div>
                    <p>Preis: <?= $product->std_price; ?>€</p>
                </div>
                <? if (isset($_SESSION['id']) && $_SESSION['id'] !== null) : ?>
                    <div class="counter">
                        <div class="box" data-type="decrease" id="leftBox"><a>-</a></div>
                        <div class="box" data-type="amount" id="centerBox"><a>0</a></div>
                        <div class="box" data-type="increase" id="rightBox"><a>+</a></div>
                    </div>
                    <div>
                        <button class="btn" data-id="<?= $product->id ?>">Add to Cart</button>
                    </div>
                <? else: ?>
                    <div class="counter">
                        <div class="box disabled" data-type="decrease" id="leftBox"><a>-</a></div>
                        <div class="box disabled" data-type="amount" id="centerBox"><a>0</a></div>
                        <div class="box disabled" data-type="increase" id="rightBox"><a>+</a></div>
                    </div>
                    <div>
                        <button class="btn disabled" data-id="<?= $product->id ?>">Add to Cart</button>
                    </div>
                <? endif; ?>
            </article>
        </div>
    <?php endforeach; ?>
    <div style="display: none">Sucher ergab keine Treffer!</div>
</div>
<!---------------------------------------------- Test -------------------------------------------->
<div class="item" id="productView" style="display: none">
    <article>
        <img src="<?= ASSETSPATH . 'images' . DIRECTORY_SEPARATOR . 'products' . DIRECTORY_SEPARATOR . $product->filename ?>"
             width=200" height="100" alt="item">
        <div id="productName"></div>
        <br>
        <div id="productDescription"></div>
        <div>
            <p>Kategorie:</p>
            <div id="productCat"></div>

        </div>
        <div>
            <p>Preis:
            <div id="productPrice">€</p>
            </div>
            <? if (isset($_SESSION['id']) && $_SESSION['id'] !== null) : ?>
                <div class="counter">
                    <div class="box" data-type="decrease" id="leftBox"><a>-</a></div>
                    <div class="box" data-type="amount" id="centerBox"><a>0</a></div>
                    <div class="box" data-type="increase" id="rightBox"><a>+</a></div>
                </div>
                <div>
                    <button id="buttonEnabled" data-id="" class="btn">Add to Cart</button>
                </div>
            <? else: ?>
                <div class="counter">
                    <div class="box disabled" data-type="decrease" id="leftBox"><a>-</a></div>
                    <div class="box disabled" data-type="amount" id="centerBox"><a>0</a></div>
                    <div class="box disabled" data-type="increase" id="rightBox"><a>+</a></div>
                </div>
                <div>
                    <button class="btn disabled" data-id="<?= $product->id ?>">Add to Cart</button>
                </div>
            <? endif; ?>
    </article>
</div>


