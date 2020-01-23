<?php

function getNews()
{
    return json_decode(file_get_contents("model/dataStorage/news.json"),true);
}
function getSnows()
{
    return json_decode(file_get_contents("model/dataStorage/snows.json"),true);
}
function getUsers()
{
    return json_decode(file_get_contents("model/dataStorage/Users.json"),true);
}
function getTheUser($name)
{
    $listUsers = getUsers();
    foreach ($listUsers as $User)
    {

        if ($User['username'] == $name)
        {
            return $User;
        }
    }
    return "";
}
?>
