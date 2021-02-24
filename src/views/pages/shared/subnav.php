<?php
require_once COREPATH . 'jsonMapping.php';
?>


<div class="secondNavigation">
    <!--    <nav class="secondNavigation">>-->
    <ul class="secondNavigation">
        <li>
            <div class="text"><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=pages&a=contact">Kontaktaufnahme</a></div>
        </li>
        <li>
            <div class="text"><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=shop&a=categories">Shop</a></div>
        </li>
        <li><label for="search">
                <form name="searchbar" id="searchForm" method="get">
            </label><input type="search" id="search" name="search" placeholder="  Suche"></form></li>
        <input id="searchSubmit" style="display:none" type="submit">
        <?php if(isset($_SESSION['email'])): ?>
        <li>
            <div class="icon"><a href="<?= $_SERVER['SCRIPT_NAME'] ?>?c=shop&a=cart"><img
                            src="<?= ASSETSPATH . 'icons' . DIRECTORY_SEPARATOR . 'checkoutCart.png' ?>"/></a></div>
        </li>
        <?php endif; ?>
    </ul>
</div>



