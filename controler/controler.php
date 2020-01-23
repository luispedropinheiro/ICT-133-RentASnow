<?php
require_once 'model/model.php';

// This file contains nothing but functions

function home()
{
    $news = getNews();
    require_once 'view/home.php';
}
function displaySnow()
{
    $snows = getSnows();
    require_once "view/snowboards.php";
}
function login($username,$password)
{
    $_SESSION["Error"] = false;

    $UserLog = getTheUser($username);
    if ($UserLog != "")
    {
        if ($UserLog["password"] == $password)
        {
            $_SESSION = $username;
        }
    }
    if (isset($_SESSION["user"]) == false)
    {
        $_SESSION["Error"] = true;
    }

    require_once "view/home.php";
}
?>
