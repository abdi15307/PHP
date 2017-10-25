<?php
/**
 * Created by PhpStorm.
 * User: Said Abdihaq
 * Date: 17-7-2017
 * Time: 14:18
 */

$mybestand = fopen("newfile.txt", "w");
$txt = "John Doe\n";
fwrite($mybestand, $txt);
$txt = "Jane Doe\n";
$text ="Vincent van Dijk\n";
$text ="martijn kerk\n";
fwrite($mybestand, $txt.$text.$text);
fclose($mybestand);
?>