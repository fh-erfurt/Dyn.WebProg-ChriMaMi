<?php

use dwp\model\Members as Members;

/**
 * @param $email expects an email-address from user as string
 * @return mixed|null return Account by email
 */
function getCustomer($email)
{
    $db = $GLOBALS['db'];
    $sql = "email=" . $db->quote($email);
    return Members::findOne($sql);
}

/**
 * @param $member expects member object
 * @return bool return true if the user is admin
 */
function isAdmin($member){
    if($member->roll === 'admin'){
        return true;
    } else {
        return false;
    }
}

/**
 * @param $email expects email-address
 * @param $password expects password
 * @return bool returns true if both values ar set
 */
function emptyInputLogin($email, $password)
{
    if (empty($email) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

/**
 * @param $email expects email-address
 * @param $password expects password
 * @return false return false if the user login failed
 */

function loginUser($email, $password)
{
    $member = getCustomer($email);
    if (isset($member)) {
        $isAdmin = isAdmin($member);
        $password_hashed = $member->password_hash;

        $isPasswordCorrect = password_verify($password, $password_hashed);
        if ($isPasswordCorrect) {
            $_SESSION['id'] = $member->id;
            $_SESSION['email'] = $member->email;
            $_SESSION['isAdmin'] = $isAdmin;
            header("Location: index.php?c=pages&a=main");
        }
    }
    return false;
}



