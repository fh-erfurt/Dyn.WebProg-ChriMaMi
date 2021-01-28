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
        if (isset($_GET['cat']))
        {
            $products = Products::find('category = \''.$_GET['cat'].'\'');
            $this->setParam('products', $products);

        }
        else
        {
            $products = Products::find();
            $this->setParam('products', $products);
        }
    }

    public function actionCart()
    {

    }

    public function actionContact()
    {

    }

}