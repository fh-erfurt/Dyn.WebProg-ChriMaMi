<?php


/** @author Christoph Frischmuth*/

namespace dwp\controller;
use dwp\model\Members as Members;
use dwp\model\Orders as Orders;
use dwp\model\OrdersHasProducts as OHP;
use dwp\model\Addresses as Addresses;

class AdministrationController extends \dwp\core\Controller
{
    public function actionMyData()
    {

        $customer = getMember($_SESSION['id']);
        $address = getAddress($customer->addresses_id);

        $this->setParam('customer', $customer);
        $this->setParam('address', $address);


        if (isset($_POST['contact']) && $_POST['contact'] === 'input_changeAccountPassword')
        {
            // todo: implement an mail-server request
            die("password");
        }
        else if (isset($_POST['delete']) && $_POST['delete'] === 'input_deleteAccount')
        {
            $db = $GLOBALS['db'];
            $member = Members::findOne('email = '.$db->quote($_POST['email']));

            $orders = Orders::find('members_id ='.$_SESSION['id']);

            //delete depending data from member
            foreach ($orders as $order)
            {
                $ordersHasProducts = OHP::find('orders_id = '.$order->id);
                foreach ($ordersHasProducts as $ohp)
                {
                    $ohp->destroy();
                }
                $order->destroy();
            }
            $member->destroy();
            session_destroy();
            redirect('index.php?c=pages&a=main');
        }

        else if (isset($_POST['update']) && $_POST['update'] === 'input_changeAccountDetails')
        {
            $db = $GLOBALS['db'];
            $member = Members::findOne('email = '.$db->quote($_POST['email']));

            $address = Addresses::findOne("street=".$db->quote($_POST['street'])
                ." AND house_number=".$db->quote($_POST['house_number'])
                ." AND city=".$db->quote($_POST['city'])
                ." AND zip=".$db->quote($_POST['zip']));
            if (is_null($address))
            {
                $addressData = array(
                    'street'        => $_POST['street'],
                    'house_number'  => $_POST['house_number'],
                    'city'          => $_POST['city'],
                    'zip'           => $_POST['zip']);

                $address = new Addresses($addressData);
                $address->insert();
            }


            $member->firstname = $_POST['firstname'];
            $member->lastname  = $_POST['lastname'];
            $member->email     = $_POST['email'];
            $member->phone     = $_POST['phone'];
            $member->addresses_id = $address->id;

            $member->update();
        }
    }

    public function actionMyOrders()
    {
            // todo: implement later
    }

    public function actionUserManagement()
    {
        $members = Members::find();
        $this->setParam('members', $members);
    }

    public function actionRemove()
    {
        if (isset($_GET['member']))
        {
            $member = Members::findOne('id ='.$_GET['member'] );
            $orders = Orders::find('members_id ='.$_GET['member']);

            //delete depending data from member
            foreach ($orders as $order)
            {
                $ordersHasProducts = OHP::find('orders_id = '.$order->id);
                foreach ($ordersHasProducts as $ohp)
                {
                    $ohp->destroy();
                }
                $order->destroy();
            }
            $member->destroy();
        }
        redirect("index.php?c=administration&a=usermanagement");
    }
}