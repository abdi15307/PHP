<?php
/**
 * Created by PhpStorm.
 * User: S.A. Mohamed
 * Date: 7-2-2017
 * Time: 14:00
 */

$leeftijd = date('12'); //Hoe laat is het nu (in uren)
if ($leeftijd >65) {
    echo "U moet €5 betalen";
} else if ($leeftijd <=12&& $leeftijd >=3) {
    echo "jij  moet ook €5 betalen";
} else if ( $leeftijd >=13 && $leeftijd <=65
) {
    echo "Jij moet € 10 betalen";
    }
    if ( $leeftijd <= 3) {
        echo "je  mag gratis meee";
    }



?>
