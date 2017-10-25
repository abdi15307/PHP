<?php
/**
 * Created by PhpStorm.
 * User: said Abdihaq
 * Date: 13-8-2017
 * Time: 09:15
 */
$student1 = ["voornaam" => 'Said ', "achternaam" => 'Mohamed', "studie" => 'applicatie beheerder', "studie jaar" => 2016];
$student2 = ["voornaam" => 'Martijn ', "achternaam" => 'Kroeders', "studie" => 'applicatie beheerder', "studiejaar" => 2016];

$student3 = ["voornaam" => 'Jan ', "tussenvoegsels" => 'van', "achternaam" => 'Wolf', "studie" => 'applicatie beheerder', "studiejaar" => 2016];
$stageuren = [40, 18];
$studenten = [["voornaam" => 'Jan ', "tussenvoegsels" => 'van', "achternaam" => 'Wolf', "studie" => 'applicatie beheerder', "studiejaar" => 2016],
    ["voornaam" => 'Mohamed ', "tussenvoegsels" => 'el', "achternaam" => 'Idris', "studie" => 'applicatie beheerder', "studiejaar" => 2016

    ]];
$inloggegevens = [
    "voornaam" => 'Said', "achternaam" => 'Abdihaq', "email" => 's.abdihaq@me.com', "gebruikersnaam" => 'Sabdihaq',
    "wachtwoord" => 'welkom01', "pincode" => '1245'
];
$zoeken = array_filter($inloggegevens, function ($value,$key) {
    return $key == "gebruikersnaam" or $key == "wachtwoord";
}, ARRAY_FILTER_USE_BOTH);
echo 'array_shift';
echo "<pre>";
var_dump($zoeken);


echo 'array_combine';
echo "<pre>";
var_dump(array_combine($student1, $student2));


echo 'array_diff';
echo "<pre>";

var_dump(array_diff($student2, $student3, $student1));


echo 'array_intersect';
echo "<pre>";
var_dump(array_intersect($student2, $student3));


echo 'array_pad';
echo "<pre>";
var_dump(array_pad($student3, 6, "Single"));

echo 'array_flip';
echo "<pre>";
var_dump(array_flip($student1));

echo 'array_push';
echo "<pre>";
var_dump(array_push($student2, "leeftijd = 24"));
var_dump($student2);

echo 'array_product';
echo "<pre>";
echo 'aantal stage uren  van een student is : ';
var_dump(array_product($stageuren));

echo 'array_shift';
echo "<pre>";
var_dump(array_shift($student1));
var_dump($student1);
echo "<pre>";

echo 'array_unshift';
echo "<pre>";
var_dump(array_unshift($student2, "15307", "Ao"));
var_dump($student2);


echo 'array_column';
echo "<pre>";
$voornamen = array_column($studenten, "voornaam");
var_dump($voornamen);