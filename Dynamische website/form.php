<?php
/**
 * Created by PhpStorm.
 * User: Eigenaar
 * Date: 7-3-2017
 * Time: 11:35
 */
include("header.php");
?>

    <form action="result.php" method="GET">
        Naam <input type="text" value="" name="naam"><br>
        Adres <input type="text" value="" name="adres"><br>
        Email <input type="email" value="" name="email"><br>
        Wachtwoord <input type="password" value="" name="wachtwoord"><br>
        <input type="submit" name="knop" value="Registreren"><br>
    </form>
<?php
include("footer.php");
?>