<?php
session_start();

// Login token if exists
if (isset($_Post["username"]) && isset($_Post["motdepasse"])){
    $username = $_Post["username"];
    $password = $_Post["motdepasse"];
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
        break;

    case "disconnect":
        echo ("disco");
        break;

    case "newaccount":
        echo ("acc");
        break;
    default:
        home();
        break;

}
?>
