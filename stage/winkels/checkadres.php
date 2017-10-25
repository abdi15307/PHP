<?php
/**
 * Created by PhpStorm.
 * User: Eigenaar
 * Date: 19-7-2017
 * Time: 14:54
 */

$search      = "NEKKERSPOELSTRAAT";
$lines       = file('HuboWinkellijst.csv');
$found = false;

foreach ($lines as $key => $line) {
    $found = (strpos($line, $search) !== FALSE);
    if ($found){
        break;
    }
}

if($found){
    echo "Results found for " .$search;
} else{
    echo "No results found for $search";
}