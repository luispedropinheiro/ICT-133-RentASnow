<?php
/**
 * Title: createaccount.php
 * Author: LPO
 * Date: 24.01.2020
 */

ob_start();
?>
<div>
    <form action ="?action=newaccount" method="post" class="form-group">
        <h1 class="text-center"><strong>Créer un compte</strong></h1>

        <label for="username">Username</label>
        <input type="text" id="username" name="username" class="form-group form-control" placeholder="Entrez un nom d'utilisateur" required/><br>

        <label for="fullname">Nom Complet</label>
        <input type="text" id="fullname" name="fullname" class="form-group form-control" placeholder="Entrez votre nom complet" required/><br>

        <label for="birthdate">Date de naissance</label>
        <input type="date" name="birthdate" id="birthdate" class="form-group form-control" required><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-group form-control" placeholder="Entrez un mot de passe" required/><br>

        <button type="submit" id="btnCreate" class="btn btn-primary">Créer</button>

    </form>
</div>
<?php

$content = ob_get_clean();
require_once ("gabarit.php");

?>
