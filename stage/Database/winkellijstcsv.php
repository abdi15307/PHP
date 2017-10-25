<?php
/**
 * Created by PhpStorm.
 * User: Eigenaar
 * Date: 22-9-2017
 * Time: 08:49
 */


 $handle = fopen("winkellijst.csv", "r");
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        var_dump($data);
        echo '<pre>';


}
