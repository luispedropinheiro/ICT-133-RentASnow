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
?>
