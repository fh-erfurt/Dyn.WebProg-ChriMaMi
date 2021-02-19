<?php

use dwp\model\Members as Members;

/**
 * @param $email expects an email-address from user as string
 * @return mixed|null return Account by email
 */
function getMember($email)
{
    $db = $GLOBALS['db'];
    $sql = "email=" . $db->quote($email);
    return Members::findOne($sql);
}

function isAdmin($member){
    if($member === 'admin'){
        return true;
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
    $member = getMember($email);
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
/*        header("Location: index.php?c=accounts&a=login&e=invalid");*/
    return false;
}



