<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */

namespace dwp\controller;



use dwp\model\Addresses as Addresses;
use dwp\model\Members as Members;

class AccountsController extends \dwp\core\Controller
{
    public function actionSignup()
    {
        //handle post values
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

        //verify every value is set
        $allRequiredValuesSet = TRUE;
        foreach ($values as $key => $value)
        {
            if($value === "")
            {
                $allRequiredValuesSet = FALSE;
            }
        }

        if($allRequiredValuesSet === TRUE)
        {

            //set Address
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

            //set Member
            $member = Members::findOne("email=".$db->quote($values['email']));
            if (!isset($member))
            {
                $memberData = array(
                    'firstname'         => $values['firstname'],
                    'lastname'          => $values['lastname'],
                    'roll'              => 'user',
                    'gender'            => $values['gender'],
                    'addresses_id'      => $values['addresses_id'],
                    'email'         => $values['email'],
                    'password_hash'  => $values['password']
                );

                $member = new Members($memberData);
                $member->insert();

            }
            else
            {
                // We forgot the Error handle :(
                echo 'Account mit dieser Emailadresse existiert bereits!!!';
                exit();
            }

            $values['id'] = $member->id;
        }

        if (isset($_POST['signUp'])) {
            redirect("index.php?c=pages&a=redirecttimeout&o=signup");
        }
    }


    public function actionLogin()
    {

        // store error message
        $errMsg = null;
        $email = $_POST['email'] ?? '';

        // check user send login field
        if (isset($_POST['submit_login'])) {

            // retrieve( inputs
            $password = isset($_POST['password']) ? $_POST['password'] : '';

            require_once COREPATH . 'functionsLogin.php';

            if (emptyInputLogin($email, $password)) {
                $errMsg = 'invalid';
            }
            else {
                if (loginUser($email, $password) === false)
                {
                    $errMsg = 'invalid';
                }

            }
        }
        $this->setParam('errMsg', $errMsg);
        $this->setParam('email', $email);
    }

    public function actionLogout()
    {
        session_destroy();
    }
}