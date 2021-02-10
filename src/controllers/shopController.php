<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */

namespace dwp\controller;

use dwp\model\Customers;
use dwp\model\products as Products;
use dwp\model\cart as Cart;

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

    public function actionAdd()
    {
        if (isset($_GET['product']))
        {
            $product = Products::findOne('id = '.$_GET['product']);
            if ($product == null)
            {
                die("Produkt existiert nicht!");
            }

            $customer = Customers::findOne(); //Todo: aktuellen user abrufen!!
            $cart = Cart::findOne('customers_id = '.$customer->id.' and products_id = '.$product->id);
            if ($cart == null)
            {
                $cart = new Cart([
                    'products_id' => $product->id,
                    'customers_id' => $customer->id,
                    'amount' => intval($_GET['amount']??1)
                ]);
                $cart->insert();
            }
            else
            {
                $cart->amount+= intval($_GET['amount']??1);
                $cart->update();
            }
        }
        header("Location: index.php?c=shop&a=cart");
    }


}