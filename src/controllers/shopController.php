<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */

namespace dwp\controller;

use dwp\model\CartView as CartView;
use dwp\model\members as Members;
use dwp\model\MembersHasProducts as MHP;
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
        $cart_view = CartView::find('members_id = \''.$_SESSION['id'].'\'');
        $this->setParam('cart_view', $cart_view);

        $result = 0;

        foreach ($cart_view as $item)
        {
            $result += $item->total_price;
        }
        $this->setParam('result', $result);
    }

    public function actionContact()
    {

    }
    public function actionCheckout()
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



            $member = Members::findOne('id = \''.$_SESSION['id'].'\'');

            $cart = Cart::findOne('members_id = '.$member->id.' and products_id = '.$product->id);
            if ($cart == null)
            {
                $cart = new Cart([
                    'products_id' => $product->id,
                    'members_id' => $member->id,
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

        redirect("index.php?c=shop&a=cart");
    }

    public function actionRemove()
    {
        if (isset($_GET['product']))
        {
            $product = Products::findOne('id = '.$_GET['product']);
            if ($product == null)
            {
                die("Produkt existiert nicht!");
            }



            $member = Members::findOne('id = \''.$_SESSION['id'].'\'');

            $cart = MHP::findOne('members_id = '.$member->id.' and products_id = '.$product->id);
            if ($cart !== null)
            {
                $cart->destroy();
            }
        }

        redirect("index.php?c=shop&a=cart");
    }

    public function actionSearch() {

    }


}