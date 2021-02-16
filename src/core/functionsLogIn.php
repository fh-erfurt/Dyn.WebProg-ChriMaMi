<?php

use dwp\model\Accounts as Accounts;
use dwp\model\Administrators as Administrators;

/**
 * @param $email expects an email-address from user as string
 * @return mixed|null return Account by email
 */
function getAccount($email)
{
    $db = $GLOBALS['db'];
    $sql = "email=" . $db->quote($email);
    return Accounts::findOne($sql);
}

function isAdmin($account){
    $db = $GLOBALS['db'];
    $userId = $account->id;
    $sql = "accounts_id=". $db->quote($userId);
    $adminId = Administrators::findOne($sql);
    if(isset($adminId)){
        if($userId === $adminId->accounts_id) {
            return true;
        }
    } else {
        return false;
    }
}

function emptyInputLogin($email, $password)
{
    if (empty($email) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($email, $password)
{
    $account = getAccount($email);
    if (isset($account)) {
        $isAdmin = isAdmin($account);
        $password_hashed = $account->password_hash;

        $isPasswordCorrect = password_verify($password, $password_hashed);
        if ($isPasswordCorrect) {
            $_SESSION['id'] = $account->id;
            $_SESSION['email'] = $account->email;
            $_SESSION['isAdmin'] = $isAdmin;
            header("Location: index.php?c=pages&a=main");
        }
    }
/*        header("Location: index.php?c=accounts&a=login&e=invalid");*/
    return false;
}



