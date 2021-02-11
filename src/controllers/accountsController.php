<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */

namespace dwp\controller;



use dwp\model\Addresses as Addresses;
use dwp\model\Customers as Customers;
use dwp\model\Accounts as Accounts;

class AccountsController extends \dwp\core\Controller
{
    public function actionSignup()
    {
        $values = array(
        'gender'         => isset($_POST['gender']) ? $_POST['gender'] : "",
        'firstname'      => isset($_POST['firstname']) ? $_POST['firstname'] : "",
        'lastname'       => isset($_POST['lastname']) ? $_POST['lastname'] : "",
        'email'          => isset($_POST['email']) ? $_POST['email'] : "",
        'birthday'       => isset($_POST['birthday']) ? $_POST['birthday'] : "",
        'street'         => isset($_POST['street']) ? $_POST['street'] : "",
        'houseNumber'    => isset($_POST['houseNumber']) ? $_POST['houseNumber'] : "",
        'city'           => isset($_POST['city']) ? $_POST['city'] : "",
        'zip'            => isset($_POST['zip']) ? $_POST['zip'] : "",
        'password'       => isset($_POST['password'])                                           //looks confusing
                            && isset($_POST['repeatPassword'])                                  //it simply check that the $_POST variable contains the 'password' and 'repeatPassword' keys
                            && $_POST['password'] === $_POST['repeatPassword']                  //if it has the variables it proofed that is equal
                            ? password_hash($_POST['password'],PASSWORD_DEFAULT) : "",     //finally the value is the hashedPassword if is everything correct otherwise the value is ""
        );
        $db = $GLOBALS['db'];


        $allRequiredValuesSet = true;
        foreach ($values as $key => $value)
        {
            if($value === "")
            {
                $allRequiredValuesSet = false;
            }
        }

        if($allRequiredValuesSet === true)
        {
            $account = Accounts::findOne("email=".$db->quote($values['email']));
            if (!isset($account))
            {
                $accountData = array(
                    'email'         => $values['email'],
                    'password_hash'  => $values['password']
                );
                $account = new Accounts($accountData);
                $account->insert();
            }
            else
            {
                echo '<script type="text/javascript"> alert("Account mit dieser Emailadresse existiert bereits!!!"); </script>';
            }
            $values['accounts_id'] = $account->id;

            $address = Addresses::findOne("street=".$db->quote($values['street'])
                                            ." AND house_number=".$db->quote($values['houseNumber'])
                                            ." AND city=".$db->quote($values['city'])
                                            ." AND zip=".$db->quote($values['zip']));
            if (!isset($address))
            {
                $addressData = array(
                    'street'        => $values['street'],
                    'house_number'  => $values['houseNumber'],
                    'city'          => $values['city'],
                    'zip'           => $values['zip']);

                $address = new Addresses($addressData);
                $address->insert();
            }
            $values['addresses_id'] = $address->id;

           $customer = Customers::findOne("firstname=".$db->quote($values['firstname'])
                                                ." AND lastname=".$db->quote($values['lastname'])
                                                ." AND gender=".$db->quote($values['gender'])
                                                ." AND accounts_id=".$db->quote($values['accounts_id'])
                                                ." AND addresses_id=".$db->quote($values['addresses_id']));
            if (!isset($customer))
            {
                $customerData = array(
                    'firstname'         => $values['firstname'],
                    'lastname'          => $values['lastname'],
                    'gender'            => $values['gender'],
                    'accounts_id'       => $values['accounts_id'],
                    'addresses_id'      => $values['addresses_id']
                );

                $customer = new Customers($customerData);
                $customer->insert();
            }
            $values['id'] = $customer->id;
        }

        //echo '<pre>', var_dump($_POST), '</pre>';

        //$address = \dwp\model\Address::findOne("street=".$db->quote($street)." AND houseNumber=".$db->quote($houseNumber). " AND city=".$db->quote($city)." AND zip=".$db->quote($zip));
        //echo '<pre>', var_dump($account), '</pre>';
        //echo '<pre>', var_dump($address), '</pre>';

    }

    public function actionLogin()
        {
        // store error message
        $errMsg = null;

        // check user send login field
        if (isset($_POST['submit_login'])) {

            // retrieve( inputs
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';

            require_once COREPATH . 'functionsLogin.php';

            // TODO: Validate input first

            if (emptyInputLogin($email, $password) !== false) {
                header("Location: index.php?c=errors&a=errorLogin&error=emptyInput");
                exit();
            }
            // TODO: Check login values with database accounts
            loginUser($errMsg,$email, $password);
        }
    }

    public function actionLogout()
    {
        session_destroy();
/*        header("Location: index.php?c=pages&a=main");*/
    }
}