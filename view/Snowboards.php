<?php
/**
 * Title: snowboards.php
 * Author: LPO
 * Date: 10.01.2020
 */

ob_start();
?>
    <h1></h1>
    <table class="table table-bordered">
        <tr>
            <th>Modèle</th>
            <th>Marque</th>
            <th>BigImage</th>
            <th>SmallImage</th>
            <th>DateRetour</th>
            <th>Disponible</th>
        </tr>
        <tr>
            <?php
            foreach ($snows as $snow)


            ?>
        </tr>



    </table>


?>
<?php
$content = ob_get_clean();
require_once ("gabarit.php");
?>