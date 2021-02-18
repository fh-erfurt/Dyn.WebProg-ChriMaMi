<link href="<?= ASSETSPATH . 'designs' . DIRECTORY_SEPARATOR . 'design-products.css' ?>" rel="stylesheet">
<script src="<?= ASSETSPATH.'javascripts'.DIRECTORY_SEPARATOR.'counterForShop.js' ?>" type="text/javascript"></script>
    <? require SHAREDPATH . "subnav.php"; ?>

    <section class="cartDisplay">
        <section class="wholeCart">
            <h2>Einkaufswagen</h2>
            <hr/>
            <!--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
                dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita
                kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            </p>-->
            <? foreach ($cart_view as $ware) :?>
                <section class="cartItem">
                    <img src="<?= ASSETSPATH . 'images'. DIRECTORY_SEPARATOR. 'products'. DIRECTORY_SEPARATOR.$ware->filename?>" alt="<?=$ware->alt_text?>">
                    <div class="descriptionAll">
                        <p>Item_01</p>
                            <ul>
<!--                                <li>Stk.-Preis: src="<?/*= ASSETSPATH . 'icons' . DIRECTORY_SEPARATOR . 'trash.png' */?></li>
-->
                                <li>Stk.-Preis: "<?=$ware->std_price?></li>
                                <li>Gesamtpreis: <?=$ware->total_price?></li>
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
            <? endforeach;?>
            <hr/>
        </section>
        <aside>
            <section>
                <h2>Summe(Anzahl der Artikel): 00,00€</h2>
                <button class="btn">Zur Kasse gehen</button>
            </section>
        </aside>
    </section>
