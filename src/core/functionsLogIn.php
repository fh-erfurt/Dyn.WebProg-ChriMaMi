<?php
use dwp\model\Accounts as Accounts;
use dwp\model\Administrators as Administrators;

function getAccount($email)
{
    $db = $GLOBALS['db'];
    $sql = "email=" . $db->quote($email);
    $entry = Accounts::findOne($sql);

    if (!isset($entry)) {

    redirect("index.php?c=errors&a=errorLogin&error=stmtFailed");
    }
    return $entry;
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

function loginUser(&$errorMsg,$email, $password)
{
    $account = getAccount($email);
    $isAdmin = isAdmin($account);

    if ($account === false) {
        redirect("index.php?c=errors&a=errorLogin&error=accFailed");
    }
    $password_hashed = $account->password_hash;

    $checkPassword = password_verify($password, $password_hashed);
    if ($checkPassword === false) {
        redirect("index.php?c=errors&a=errorLogin&error=stmtFailed");
    } else if ($checkPassword === true) {
        $_SESSION['email'] = $account->email;
        $_SESSION['isAdmin'] = $isAdmin;

        header("Location: index.php?c=pages&a=main");
    }
}
?>


