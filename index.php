<?php
session_start();

// New account data
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $birthdate = $_POST['birthdate'];
    $password = $_POST['password'];
// Login token if exists
if (isset($_POST["username"]) && isset($_POST["password"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
}
require "controler/controler.php";

// Check Action
if (isset($_GET["action"])){
    $choice = $_GET["action"];
}

switch ($choice)
{
    case "displaySnows":
        displaySnow();
        break;

    case "connect":
        require_once "view/account.php";
        break;

    case "login":
        login($username,$password);
        break;

    case "disconnect":
        unset($_SESSION['username']);
        home();
        break;

    case "createaccount":
        require_once "view/createaccount.php";
        break;
    case "newaccount":
        newaccount($username,$fullname,$birthdate,$password);
        home();
        break;
    default:
        home();
        break;

}
?>
