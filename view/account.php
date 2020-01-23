<?php
/**
 * Title: account.php
 * Author: LPO
 * Date: 10.01.2020
 */

ob_start();
?>
<div class="text-center">
    <form action ="?action=login" method="post">
            <h1><strong>Connexion</strong></h1>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="form-group form-control" placeholder="Entrez votre nom d'utilisateur" required/><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-group form-control" placeholder="Entrez votre mot de passe" required/><br>
            <button type="submit" id="btnLogin" class="btn btn-primary">Connecter</button>
    </form>
</div>
<?php

$content = ob_get_clean();
require_once ("gabarit.php");

?>
