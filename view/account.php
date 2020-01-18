<?php
/**
 * Title: account.php
 * Author: LPO
 * Date: 10.01.2020
 */

ob_start();
?>
<div class="text-center">
    <form action ="/action=login" method="post">
            <h1><strong>Connexion</strong></h1>
            <label>Username</label>
            <input type="text" id="username" class="form-control" placeholder="Entrez votre nom d'utilisateur"/><br>
            <input type="password" id="password" class="form-control" placeholder="Entrez votre mot de passe"/><br>
            <button type="submit" id="btnLogin" class="btn btn-primary">Connecter</button>
    </form>
</div>
<?php

$content = ob_get_clean();
require_once ("gabarit.php");

?>
