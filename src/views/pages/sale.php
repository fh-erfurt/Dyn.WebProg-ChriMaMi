<link href="<?= ASSETSPATH.'designs'.DIRECTORY_SEPARATOR.'design-products.css' ?>" rel="stylesheet">
<div class="secondNavigation">
    <!--    <nav class="secondNavigation">>-->
    <ul class="secondNavigation">
        <li><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=pages&a=sale">Shop</a></li>
        <li><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=pages&a=sale">Aktuelle Angebote</a></li>
        <li><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=pages&a=categories">Kategorien</a></li>
        <li><label for="suche"></label><input type="search" id="suche" placeholder="  Suche"></li>
        <li><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=pages&a=cart">Warenkorb</a></li>
    </ul>
</div>
<h1>Neue Produkte</h1>
<section class="carousel" aria-label="Gallery">
    <ol class="carousel__viewport">
        <li id="carousel__slide1"
            tabindex="0"
            class="carousel__slide">
            <div class="carousel__snapper">
                <a href="#carousel__slide4"
                   class="carousel__prev">Go to last slide</a>
                <a href="#carousel__slide2"
                   class="carousel__next">Go to next slide</a>
            </div>
        </li>
        <li id="carousel__slide2"
            tabindex="0"
            class="carousel__slide">
            <div class="carousel__snapper">
                <a href="#carousel__slide1"
                   class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide3"
                   class="carousel__next">Go to next slide</a>
            </div>
        </li>
        <li id="carousel__slide3"
            tabindex="0"
            class="carousel__slide">
            <div class="carousel__snapper">
                <a href="#carousel__slide2"
                   class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide4"
                   class="carousel__next">Go to next slide</a>
            </div>
        </li>
        <li id="carousel__slide4"
            tabindex="0"
            class="carousel__slide">
            <div class="carousel__snapper">
                <a href="#carousel__slide3"
                   class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide1"
                   class="carousel__next">Go to first slide</a>
            </div>
        </li>
    </ol>
    <aside class="carousel__navigation">
        <ol class="carousel__navigation-list">
            <li class="carousel__navigation-item">
                <a href="#carousel__slide1"
                   class="carousel__navigation-button">Go to slide 1</a>
            </li>
            <li class="carousel__navigation-item">
                <a href="#carousel__slide2"
                   class="carousel__navigation-button">Go to slide 2</a>
            </li>
            <li class="carousel__navigation-item">
                <a href="#carousel__slide3"
                   class="carousel__navigation-button">Go to slide 3</a>
            </li>
            <li class="carousel__navigation-item">
                <a href="#carousel__slide4"
                   class="carousel__navigation-button">Go to slide 4</a>
            </li>
        </ol>
    </aside>
</section>

<h1>Sparangebote</h1>
<div class="PagesSlider">
    <div class="PagesSlider-slides">
        <div class="PagesSlider-slide"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/138822/mdn-min.jpg"/></div>
        <div class="PagesSlider-slide"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/138822/csstricks-min.jpg"/></div>
        <div class="PagesSlider-slide"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/138822/codepen-min.jpg"/></div>
        <div class="PagesSlider-slide"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/138822/upperquad-min.jpg"/></div>
        <div class="PagesSlider-slide"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/138822/aranja-min.jpg"/></div>
        <div class="PagesSlider-slide"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/138822/obama-min.jpg"/></div>
        <div class="PagesSlider-slide"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/138822/who-min.jpg"/></div>
        <div class="PagesSlider-slide"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/138822/projectsabroad-min.jpg"/></div>
    </div>
</div>