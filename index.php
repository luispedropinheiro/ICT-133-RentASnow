<?php
session_start();

var_dump($_SESSION);
// Login token if exists
if (isset($_POST["username"]) && isset($_POST["password"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
}
var_dump($_POST["username"]);
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
        unset($_SESSION['user']);
        home();
        break;

    case "newaccount":
        echo ("acc");
        break;
    default:
        home();
        break;

}
?>
