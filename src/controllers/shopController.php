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
use dwp\model\orders as Orders;
use dwp\model\ordersHasProducts as OHP;

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

        if (isset($_POST['checkout']))
        {
            $member = Members::findOne('id = \''.$_SESSION['id'].'\'');
            foreach ($_POST as $key=>$amount)
            {
                if(strpos($key,"product-") !== false)
                {
                    $id = str_replace("product-", "", $key);

                    $cart = Cart::findOne('members_id = '.$member->id.' and products_id = '.$id);
                    if ($cart == null)
                    {
                        $cart = new Cart([
                            'products_id' => $id,
                            'members_id' => $member->id,
                            'amount' => intval($amount??1)
                        ]);
                        $cart->insert();
                    }
                    else
                    {
                        $cart->amount = intval($amount??1);
                        $cart->update();
                    }
                }
            }
            redirect("index.php?c=shop&a=checkout");
        }

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
        $cart_view = CartView::find('members_id = \''.$_SESSION['id'].'\'');
        $this->setParam('cart_view', $cart_view);


        $member = getCustomer($_SESSION['id']);
        $address = getAddress($member->addresses_id);


        $result = 0;

        foreach ($cart_view as $item)
        {
            $result += $item->total_price;
        }
        $this->setParam('result', $result);
        $this->setParam('member', $member);
        $this->setParam('address', $address);


        if (isset($_POST['id']))
        {

            $ordersData = array(
                'status'       => 'ordered',
                'order_date'   => date(DATE_RFC822),
                'addresses_id' => $member->addresses_id,
                'members_id'   => $member->id);
            $orders = new Orders($ordersData);
            $orders->insert();

            $ohpData = array(
                'orders_id'    => $orders->id,
                'products_id'  => '0',
                'amount'       => '0',
                'price'        => '0');

            foreach ($cart_view as $ware)
            {
                $ohpData['products_id'] = $ware->products_id;
                $ohpData['amount'] = $ware->amount;
                $ohpData['price'] = $ware->total_price;

                $ohp = new OHP($ohpData);
                $ohp->insert();
            }


        }
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