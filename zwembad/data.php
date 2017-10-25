
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>kaartbestel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
            integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container">
    <table border="1" style="width: 100%">
    <tr>

        <td> email</td>
        <td> naam</td>
        <td> soortkaart</td>
        <td> datum</td>

    </tr>





<?php
/**
 * Created by PhpStorm.
 * User: Eigenaar
 * Date: 2-10-2017
 * Time: 12:25
 */



$servername = "localhost";
$dbname = "zwembadkaart";
$username = "root";
$password = "Abdihaq12@";

$users = [
    "said@zwembad.nl" => ["pwd" => '15307', "rol" => "Administrator"]];


if($_SESSION["user"] == true){


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT  g.email,g.naam,s.naam As soortkaart,datum FROM kaartje
inner join gebruiker g on g.id =kaartje.gebruiker_id
inner join soortkaartje s on s.id =kaartje.soortkaartje_id order by g.id;");
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach ($stmt as $key => $value) {
            ?>
            <tr>
                <td> <?php echo $value["email"]; ?> </td>
                <td> <?php echo $value["naam"]; ?></td>
                <td> <?php echo $value["soortkaart"]; ?></td>
                <td> <?php echo $value["datum"]; ?></td>
            </tr>
            <?php


        }


    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} else{
    header('Location: beheerder.php');
}
?>
        <a href="beheerder.php?loguit" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>


</table>
    </div>
</body>
</html>