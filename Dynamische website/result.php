<?php

include("header.php");

$messages = array();
if(!isset($_GET["naam"])&& !isset($_GET["adres"])&& !isset($_GET["email"])&&!isset($_GET["wachtwoord"])){
    $messages[] = "Je moet eerst het formulier invullen.";
} else {
    if (strlen($_GET["naam"]) <= 2) {
        $messages[] = "Een naam moet minimaal 2 letters bevatten.";
    }
    if (strlen($_GET["adres"]) <= 4) {
        $messages[] = "Een adres moet minimaal 4 letters bevatten.";
    }
    if (strlen($_GET["email"]) == 0) {
        $messages[] = "Vul je email in";
    }
    if (strlen($_GET["wachtwoord"]) <= 4) {
        $messages[] = "Een wachtwoord moet minimaal 4 tekens bevatten.";
    }
}
if (!count($messages) == 0) {
    $html = "<ul>";
    foreach ($messages as $message) {
        $html .= "<li>" . $message . "</li>";
    }
    $html .= "</ul>";
    include("footer.php");
    echo $html;
} else {
    echo "Naam: " . $_GET["naam"] . "<br>";
    echo "Adres: " . $_GET["adres"] . "<br>";
    echo "Email: " . $_GET["email"] . "<br>";
    echo "Wachtwoord: " . $_GET["wachtwoord"] . "<br>";
}
?>