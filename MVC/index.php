<?php
/**
 * Created by PhpStorm.
 * User: Said
 * Date: 17-5-2017
 * Time: 12:46
 */
echo 'Opdracht1'.'<br>';
$naam = 'said';
$age= 21;
$adres = 'kampersingel 70';
$email = 's.abdihaq@me.com';
$mobile = 6584610926;
$land = 'nederland';

echo ucfirst($naam) . '<br>' .
    $age . '<br>' .
ucfirst($adres).'<br>'.
    ucfirst($email).'<br>'.
    ucfirst($mobile).'<br>'.
    ucfirst($land) .'<br>';


echo 'Opdracht2'.'<br>';

echo ucfirst($_GET['naam']).'<br>'.
    ucfirst($_GET['age']).'<br>'.
    ucfirst($_GET['adres']).'<br>'.
    ucfirst($_GET['email']).'<br>'.
    ucfirst($_GET['mobile']).'<br>'.
    ucfirst($_GET['land']);


?>
<!DOC