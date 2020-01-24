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

    $UserLog = getTheUser($username);
    if ($UserLog != "")
    {
        if ($UserLog['password'] == $password)
        {
            $_SESSION['username'] = $UserLog["fullname"];
        }
    }
    require_once "view/home.php";
}
function newaccount($username,$fullname,$birthdate,$password)
{
    $listUsers = getUsers();
    $newUser = [
        'username' => $username,
        'fullname' => $fullname,
        'password' => $password,
        'birthdate' => $birthdate,
        'date-inscription' => date("Y-m-d", time()),
    ];
    $listUsers[] = $newUser;
    file_put_contents("model/dataStorage/Users.json", json_encode($listUsers));
}
?>
