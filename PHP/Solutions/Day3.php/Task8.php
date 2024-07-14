<?php 
//This doesn't work... 
session_start();
if (!isset($_COOKIE['new']))
{
    setcookie('new','any', time() + (86400 * 365),'/');
    if (isset($_SESSION['users']))
    {
        $_SESSION['users'][] = "any";
    }
    else
    {
        $_SESSION['users'] = [];
        $_SESSION['users'][] = "any";
    }

}
else 
{
    $userCount = count($_SESSION['users']);
    echo "<h1>Unique visitors: $userCount";
    // echo $_COOKIE['new'];
}