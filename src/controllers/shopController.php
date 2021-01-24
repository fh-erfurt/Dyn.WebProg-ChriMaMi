<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */

namespace dwp\controller;

use dwp\model\products as Products;

class ShopController extends \dwp\core\Controller
{
    public function actionCategories()
    {
        $products = Products::find();
        $this->setParam('products', $products);
    }

    public function actionNews()
    {

    }

    public function actionCart()
    {

    }

}