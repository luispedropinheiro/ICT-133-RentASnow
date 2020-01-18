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
    $_SESSION["Guess"] = false;

    $userslist = getUsers();
    foreach ($userslist as $userslists)
    {
        if ($username == $userslists['username'] && $password == $userslists["password"])
        {
            $_SESSION["user"] = $username;
        }
    }
    if (isset($_SESSION["user"]) == false)
    {
        $_SESSION["Guess"] = true;
    }

    require_once "view/home.php";
}
?>
