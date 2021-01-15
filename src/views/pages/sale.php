<link href="<?= ASSETSPATH.'designs'.DIRECTORY_SEPARATOR.'design-products.css' ?>" rel="stylesheet">
<div class="secondNavigation">
    <!--    <nav class="secondNavigation">>-->
    <? require_once SHAREDPATH.'subnav.php' ?>
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
        <div class="PagesSlider-slide"><img src="<?= ASSETSPATH . 'images' . DIRECTORY_SEPARATOR . 'sales' . DIRECTORY_SEPARATOR . 'sale1.png' ?>"/></div>
        <div class="PagesSlider-slide"><img src="<?= ASSETSPATH . 'images' . DIRECTORY_SEPARATOR . 'sales' . DIRECTORY_SEPARATOR . 'sale2.png' ?>"/></div>
        <div class="PagesSlider-slide"><img src="<?= ASSETSPATH . 'images' . DIRECTORY_SEPARATOR . 'sales' . DIRECTORY_SEPARATOR . 'sale3.png' ?>"/></div>
        <div class="PagesSlider-slide"><img src="<?= ASSETSPATH . 'images' . DIRECTORY_SEPARATOR . 'sales' . DIRECTORY_SEPARATOR . 'sale4.png' ?>"/></div>
        <div class="PagesSlider-slide"><img src="<?= ASSETSPATH . 'images' . DIRECTORY_SEPARATOR . 'sales' . DIRECTORY_SEPARATOR . 'sale5.png' ?>"/></div>
        <div class="PagesSlider-slide"><img src="<?= ASSETSPATH . 'images' . DIRECTORY_SEPARATOR . 'sales' . DIRECTORY_SEPARATOR . 'sale6.png' ?>"/></div>
        <div class="PagesSlider-slide"><img src="<?= ASSETSPATH . 'images' . DIRECTORY_SEPARATOR . 'sales' . DIRECTORY_SEPARATOR . 'sale7.png' ?>"/></div>
        <div class="PagesSlider-slide"><img src="<?= ASSETSPATH . 'images' . DIRECTORY_SEPARATOR . 'sales' . DIRECTORY_SEPARATOR . 'sale8.png' ?>"/></div>
    </div>
</div>