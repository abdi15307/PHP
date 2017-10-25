<?php
/**
 * Created by PhpStorm.
 * User: Eigenaar
 * Date: 20-7-2017
 * Time: 09:40
 */
var_dump(array('Data 11'));
// open the file "demosaved.csv" for writing
$file = fopen('HuboWinkellijst.csv', 'w');

// Sample data. This can be fetched from mysql too
$data = $data[4].$data[5];

// save each row of the data
foreach ($data as $row)
{
    fputcsv($file, $row);
}

// Close the file
fclose($file);