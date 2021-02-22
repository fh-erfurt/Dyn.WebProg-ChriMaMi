<link href="<?= ASSETSPATH . 'designs' . DIRECTORY_SEPARATOR . 'design-products.css' ?>" rel="stylesheet">
<script src="<?= ASSETSPATH.'javascripts'.DIRECTORY_SEPARATOR.'counterForCart.js' ?>" type="text/javascript"></script>
    <? require SHAREDPATH . "subnav.php"; ?>
    <form method="post">
    <section class="cartDisplay">
        <section class="wholeCart">
            <h2>Einkaufswagen</h2>
            <hr/>
            <? if(sizeof($cart_view) == 0):?>
            <p>
            Ihr Einkaufswagen ist leer, bitte besuchen Sie unseren
            Shop um Produkte Ihrem Warenkorb hinzuzufügen.
            </p>
            <? endif; ?>
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
                        <input type="hidden" name="product-<?=$ware->products_id?>" value="<?=$ware->amount?>">
                    </div>
                    <div class="iconImg">
                        <a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=shop&a=remove&product=<?=$ware->products_id?>&amount<?=$ware->amount?>">
                            <img src="<?= ASSETSPATH . 'icons' . DIRECTORY_SEPARATOR . 'trash.png' ?> " alt="Entfernen"/>
                        </a>
                    </div>
                </section>
                <hr/>
            <? endforeach;?>
        </section>
        <aside>
            <section class="checkout">
                <h2>Summe(Anzahl der Artikel): <?= number_format($result, 2) ?>€</h2>
                <? if(sizeof($cart_view) > 0):?>
                <button class="btn" type="submit" id="checkout" value="checkout" name="checkout">Zur Kasse gehen</button>
                <? else : ?>
                <button class="btn disabled" type="submit" value="checkout" name="checkout">Zur Kasse gehen</button>
                <? endif;?>
            </section>
        </aside>
    </section>
    </form>
