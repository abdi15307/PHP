<?php
/**
 * Created by PhpStorm.
 * User: Eigenaar
 * Date: 22-3-2017
 * Time: 11:15
 */

if (isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "Administrator") {
    echo "<h1>Welkom ".$_SESSION["user"]["naam"]. " op het admingedeelte van de website</h1>";
    echo "<p><a href='login.php'>Loginpagina</a></p>";
} else {
    header('location: login.php');
}
?>