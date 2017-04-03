<?php
/**
 * Created by PhpStorm.
 * User: Eigenaar
 * Date: 22-3-2017
 * Time: 11:21
 */
$messages = array();
$html = '';
if (!isset($_GET["cobra"]) && !isset($_GET["python"]) && !isset($_GET["terraruim"])) {
    $messages[] = "Kies een dier.";

} else {
    if (isset($_GET["cobra"])) {
        $messages[] = "<img src='img/cobra.jpg' height='200px' width='200px'>";
    }
    if (isset($_GET["python"])) {
        $messages[] = "<img src='img/python.jpg' height='200px' width='200px'>";
    }
    if (isset($_GET["terraruim"])) {
        $messages[] = "<img src='img/terrarium.jpg' height='200px' width='200px'>";
    }
}
if (!count($messages) == 0) {
    foreach ($messages as $message) {
       $html .= $message;

    }
    include("index.php");
    echo $html;
} else {
    echo "dier: " . $_GET["cobra"] . "<br>";
    echo "dier: " . $_GET["python"] . "<br>";
    echo "dier: " . $_GET["terraruim"] . "<br>";
}
?>