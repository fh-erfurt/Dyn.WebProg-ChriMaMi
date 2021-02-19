<link href="<?= ASSETSPATH . 'designs' . DIRECTORY_SEPARATOR . 'design-products.css' ?>" rel="stylesheet">
<script src="<?= ASSETSPATH.'javascripts'.DIRECTORY_SEPARATOR.'counterForShop.js' ?>" type="text/javascript"></script>
    <? require SHAREDPATH . "subnav.php"; ?>

    <section class="cartDisplay">
        <section class="wholeCart">
            <h2>Einkaufswagen</h2>
            <hr/>
            <p>
            Ihr Einkaufswagen ist leer, bitte besuchen Sie unseren
            Shop um Produkte Ihrem Warenkorb hinzuzufügen.
            </p>
            <? foreach ($cart_view as $ware) :?>
                <section class="cartItem">
                    <img src="<?= ASSETSPATH . 'images'. DIRECTORY_SEPARATOR. 'products'. DIRECTORY_SEPARATOR.$ware->filename?>" alt="<?=$ware->alt_text?>">
                    <div class="descriptionAll">
                        <p><?=$ware->p_name?></p>
                            <ul>
<!--                                <li>Stk.-Preis: src="<?/*= ASSETSPATH . 'icons' . DIRECTORY_SEPARATOR . 'trash.png' */?></li>
-->
                                <li>Stk.-Preis: <?=$ware->std_price?>€</li>
                                <li class="price">Gesamtpreis: <?=$ware->total_price?>€</li>
                            </ul>
                    </div>
                    <div class="counter">
                        <div class="box" data-type="decrease" id="leftBox"><a>-</a></div>
                        <div class="box" data-type="amount"   id="centerBox"><a>0</a></div>
                        <div class="box" data-type="increase" id="rightBox"><a>+</a></div>
                    </div>
                    <div class="iconImg">
                        <img src="<?= ASSETSPATH . 'icons' . DIRECTORY_SEPARATOR . 'trash.png' ?> " alt="Entfernen"/>
                    </div>
                </section>
                <hr/>
            <? endforeach;?>
        </section>
        <aside>
            <section class="checkout">
                <h2>Summe(Anzahl der Artikel): 00,00€</h2>
                <button class="btn">Zur Kasse gehen</button>
            </section>
        </aside>
    </section>
