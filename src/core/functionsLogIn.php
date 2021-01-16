<?php


/*
function getAllUsers()
{
    $dbString = file_get_contents(DATABASE);
    $usersArray = json_decode($dbString, true);assoc == true return as as associative array
    return $usersArray['users'];
}

function user($id)
{
    $usersArray = getAllUsers();
    foreach($usersArray as $userData)
    {
        if($userData['id'] === $id)
        {
            return $userData;
        }
    }
}

function logIn(&$error, $rememberMe = false)
{
    $userArray = getAllUsers();
    $userReference  = isset($_POST['validationEmail']) ? $_POST['validationEmail'] : '';
    $userPassword   = isset($_POST['validationPassword']) ? $_POST['validationPassword'] : '';

    $userId = null;

    If the checked the rememberMe at last logIn, check the cookies an logIn automatically
    if($rememberMe === true && empty($_POST['validationEmail']) && empty($_POST['validationPassword']))
    {
        $userId = $_POST['userId'];
        $userPassword = $_POST['password'];
    }

    foreach ($userArray as $index => $userData)
    {
        if($userData['email'] === $userReference
        || $userData['id'] === $userId)
        {
            $userIndex = $index;
            $userId = $userData['id'];
            break;
        }
    }

    if(isset($userId))
    {
        if($userArray[$userIndex]['password'] === $userPassword)
        {
            $error = false;

            if(isset($_POST['rememberMe']))
            {
                rememberMe($userId, $userArray[$userIndex]['password']);
            }
            return $userId;
        }
    } else
    {
        $error = 'Wrong email or password';
    }
}

function logOut()
{
    setcookie('userId', '', -1, '/');
    setcookie('password', '', -1, '/');
    unset($_SESSION['user']);
    session_destroy();
}

function rememberMe($id, $password)
{
    $duration = time() + 3600 * 24; //24 Hours
    setcookie('userId', $id, $duration, '/');
    setcookie('password', $password, $duration, '/');

}
*/



use dwp\model\Accounts as Accounts;

function uIdExists($email) {
    $db = $GLOBALS['db'];
    $sql = "email=".$db->quote($email);
    $stmt = Accounts::findOne($sql);
/*    echo "<pre>", var_dump($stmt), "</pre>";*/

    if(!$stmt){
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }
    return $stmt;
}

function emptyInputLogin($uId, $password){
    if(empty($uId) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($uId, $password) {

    $account = uIdExists($uId);
/*    echo "Variable account";
    echo "<pre>", var_dump($account), "</pre>";
    exit();*/

    if ($account === false) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }
    $passwordHashed = $account['passwordHash'];


   //Its the final Version for already hashed passwords stored in database
    //The following function is only running if the password in db was hashed before
    /*$checkPassword = password_verify($password, $passwordHashed);
    if($checkPassword === false) {
        header("Location: ../signup.php?error=wronglogin");
        exit();
    }
    else if($checkPassword === true) {
        session_start();
        $_SESSION["id"] = $uidExists['id'];
        header("Location: ../index.php");
        exit();
    }*/



    $unhashedPassword = false;
    if($passwordHashed === $password) {
        $unhashedPassword = true;
    }

    if($unhashedPassword === false) {
        header("Location: ../signup.php?error=wronglogin");
        exit();
    }
    // TODO: Store useful variables into the session like account and also set loggedIn = true
    else if($unhashedPassword === true) {
        session_start();
        $_SESSION['email'] = $account['email'];
        header("Location: ../index.php");
        exit();
    }
}
?>


