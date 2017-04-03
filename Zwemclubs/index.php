
<?php

/**
 * Created by PhpStorm.
 * User: Eigenaar
 * Date: 8-2-2017
 * Time: 13:59
 */
$zwemver["De spartelkuikens"] = 25;
$zwemver["De waterbuffels"] = 32;
$zwemver["Plonsmderin"] = 11;
$zwemver["Bommetje"] = 23;

foreach ($zwemver as $label => $value) {
    $numPics = $value / 5.4;
    echo $label . " heeft " . $value . " leden - ";
    for ($i = 0; $i < round($numPics); $i++) {
        echo "<img src='Knipsel.JPG'>";
    }
    echo "<br>";
}