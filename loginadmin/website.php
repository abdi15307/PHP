<?php
/**
 * Created by PhpStorm.
 * User: Eigenaar
 * Date: 22-3-2017
 * Time: 11:16
 */
session_start();
if (isset($_SESSION["user"])) {
    echo "<h1>Welkom " . $_SESSION["user"]["naam"] . " op de website</h1>";
    echo "<p><a href=\"login.php\">Login</a></p>";
} else {
    header("location: login.php");
}
?>