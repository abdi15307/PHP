<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="form.php">Bestellen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>

        </div>
    </nav>

    <form>

        <div class="form-group">
            <label for="exampleInputPassword1">Naam</label>
            <input type="text" name="naam" class="form-control" id="exampleInputPassword1" placeholder="Naam">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Enter email">
        </div>
        <div class="card">
            <h4 class="card-header">Soort Kaartje</h4>
            <div class="card-body">
                <p class="card-text">

                    <?php


                    $servername = "localhost";
                    $dbname = "zwembadkaart";
                    $username = "root";
                    $password = "Abdihaq12@";


                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



                        $stmt = $conn->prepare("SELECT  id,naam FROM soortkaartje;");
                        $stmt->execute();


                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        foreach ($stmt as $key => $value) {
                            ?>
                            <input type="radio" name="soortkaart"
                                   value="<?php echo $value["id"]; ?>"><?php echo $value["naam"]; ?> <br>
                            <?php
                        }

                        if (isset($_GET["naam"]) && $_GET["email"] && isset($_SESSION) == true) {
                            $sql1 = "INSERT INTO gebruiker (naam,email)
                         VALUES ('$_GET[naam]', '$_GET[email]')";
                            $conn->query($sql1);

                        }
                        if (isset($_GET["datum"]) && $_GET["soortkaart"] && isset($_SESSION) == true) {
                            $sql2 = "INSERT INTO kaartje 
                              (datum,gebruiker_id,soortkaartje_id)

                                VALUES ('$_GET[datum]',LAST_INSERT_ID(), '$_GET[soortkaart]')";


                            $conn->query($sql2);
                        }
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                    }
                    unset($_SESSION);
                    ?>


                </p>

                <p>Datum: <input type="date" name="datum"></p>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Bestel</button>
    </form>
    <?php if (isset($_GET['submit'])) {
        $location = 'index.html';

        echo '<META HTTP-EQUIV="Refresh" Content="8; URL=' . $location . '">';
        exit;

    }

    ?>
</div>
<div class="container text-center">

    <footer>
        <h3> Routeinfo</h3>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.0637426886587!2d4.888945316442868!3d52.369264179785965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c1a915c917%3A0x7544d2ae383997e5!2sKalverstraat+123%2C+1012+PA+Amsterdam!5e0!3m2!1snl!2snl!4v1477607499333"
            width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
        <p>
            adres<br>
            kalverstraat 123<br>
            1112AB Amsterdam<br>
            Tel. 0655944933<br>
        </p>

    </footer>

</div>
</body>
</html>

