<?php
/**
 * Title: snowboards.php
 * Author: LPO
 * Date: 10.01.2020
 */

ob_start();
?>
    <h1></h1>
    <table class="table table-bordered" style="text-align: center">
        <tr>
            <th>Modèle</th>
            <th>Marque</th>
            <th>Image</th>
            <th>DateRetour</th>
            <th>Disponible</th>
        </tr>
        <tr>
            <?php
            foreach ($snows as $snow)
            {
                echo "<tr><td>".$snow['modele']."</td><td>".$snow["marque"]."</td><td><img src='view/images/".$snow["smallimage"]."' width='500px'/></td><td>".$snow["dateretour"]."</td><td>"?>
                <?php
                    if($snow["disponible"] == 1)
                    {
                        echo "Disponible";
                    }else
                        {
                            echo "Indisponible";
                        }
                    echo "</td></tr>";
            }
            ?>

        </tr>

    </table>

<?php
$content = ob_get_clean();
require_once ("gabarit.php");
?>