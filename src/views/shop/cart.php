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
            </p>
            <?php foreach ($products as $product) : ?>
                <div class="item">
                    <article>
                        <img src="<?= ASSETSPATH . 'images' . DIRECTORY_SEPARATOR. 'products'. DIRECTORY_SEPARATOR. $product->filename ?>" width=200" height="100" alt="item">
                        <b><?= $product->name;?></b><br>
                        <div>
                            <p>Stk.-Preis: <?=$product->std_price; ?>€</p>
                        </div>
                        <div>
                            <p>Gesamtpreis: <?=$product->total_price; ?>€</p>
                        </div>
                        <div class="counter">
                            <div class="box" data-type="decrease" id="leftBox"><a>-</a></div>
                            <div class="box" data-type="amount"   id="centerBox"><a>0</a></div>
                            <div class="box" data-type="increase" id="rightBox"><a>+</a></div>
                        </div>
                        <div>
                            <button class="btn" data-id="<?= $product->id ?>">Add to Cart</button>
                        </div>
                        <div> delete icon </div>
                    </article>
                </div>
            <?php endforeach;?>-->
            <section class="cartItem">
                <img src="<?= ASSETSPATH . 'images'. DIRECTORY_SEPARATOR. 'products'. DIRECTORY_SEPARATOR.'item1.jpg'?>" alt="item1">
                <div class="descriptionAll">
                    <p>Item_01</p>
                        <ul>
                            <li>Stk.-Preis: 1000€</li>
                            <li>Gesamtpreis: 2000€</li>
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
            <section class="cartItem">
                <img src="<?= ASSETSPATH . 'images'. DIRECTORY_SEPARATOR. 'products'. DIRECTORY_SEPARATOR.'item2.jpg'?>" alt="item1">
                <div class="descriptionAll">
                    <p>Item_02</p>
                    <ul>
                        <li>Stk.-Preis: 4000€</li>
                        <li>Gesamtpreis: 4000€</li>
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
        </section>
        <aside>
            <section>
                <h2>Summe(Anzahl der Artikel): 00,00€</h2>
                <button class="btn">Zur Kasse gehen</button>
            </section>
        </aside>
    </section>
