<?php


/** @author Christoph Frischmuth*/

namespace dwp\controller;
use dwp\model\Members as Members;
use dwp\model\Addresses as Addresses;

class AdministrationController extends \dwp\core\Controller
{
    public function actionMyData()
    {
        if (isset($_POST['contact']) && $_POST['contact'] === 'input_changeAccountPassword')
        {
            die("password");
        }
        else if (isset($_POST['delete']) && $_POST['delete'] === 'input_deleteAccount')
        {
            $db = $GLOBALS['db'];
            $member = Members::findOne('email = '.$db->quote($_POST['email']));
            $member->destroy();
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

    }

    public function actionUserManagement()
    {
        $members = Members::find();
        $this->setParam('members', $members);
    }
}