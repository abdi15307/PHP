<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pretpark</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styling.css">

</head>
<body>

<div class="container">

    <h4>Pretpark "de dolle griet"</h4>
    <table border="1" style="width: 100%">
        <h4> Attracties</h4>
        <tr>

            <td> idatracties</td>
            <td> soort</td>
            <td> naam</td>
            <td> wijzigen</td>
            <td> verwijderen</td>

        </tr>
        <?php

        $servername = "localhost";
        $dbname = "pretpark";
        $username = "root";
        $password = "Abdihaq12@";


        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT idatracties, soort, naam from attracties
inner join soortattractie on idsoortattractie=attracties.soortattractie_idsoortattractie;");
            $stmt->execute();

            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach ($stmt as $key => $value) {
                ?>
                <tr>

                    <td> <?php echo $value["idatracties"]; ?> </td>
                    <td> <?php echo $value["soort"]; ?></td>
                    <td> <?php echo $value["naam"]; ?></td>
                    <td>
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                data-target="#<?php echo $key; ?>">
                            Wijzigen
                        </button>

                        <!-- Modal -->

                        <div class="modal fade" id="<?php echo $key; ?>" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModal3Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModal3Label">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="post">

                                            <hr>
                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword">Idatracties:</label>
                                                <div class="controls">
                                                    <input type="text" name="idatracties" required
                                                           value= <?php echo $value["idatracties"]; ?>>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword">Soort:</label>
                                                <div class="controls">
                                                    <input type="text" name="soort" required
                                                           value=<?php echo $value["soort"]; ?>>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="inputEmail">Naam:</label>
                                                <div class="controls">
                                                    <input type="text" name="naam" required
                                                           value=<?php echo $value["naam"]; ?>>

                                                </div>


                                                <?php
                                                if (isset($_POST['opslaan'])) {
                                                    $id = $_POST['idatracties'];

                                                    $sql = "UPDATE attracties inner join soortattractie on idsoortattractie=attracties.soortattractie_idsoortattractie
                                                SET soort ='$_POST[soort]', naam ='$_POST[naam]' WHERE idatracties = '$id' ";

                                                    $conn->query($sql);
                                                    var_dump($_POST);
                                                }
                                                ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Sluit
                                                </button>
                                                <button type="submit" name="opslaan" class="btn btn-primary">Opslaan
                                                </button>


                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                    </td>
                    <td>
                        <!-- Button trigger modal -->

                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#<?php echo $value["idatracties"]; ?>">
                            Verwijderen
                        </button>
                        <form method="post">
                            <!-- Modal -->
                            <div class="modal fade" id="<?php echo $value["idatracties"]; ?>" tabindex="-1"
                                 role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModal3Label">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                            <div style="font-size:larger;" class="alert alert-danger">Are you Sure you
                                                want Delete <b
                                                    style="color:red;"><?php echo $value['idatracties'] . " " . $value['soort'] . " " . $value['naam']; ?></b>
                                                Data?
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                            </button>
                                            <button type="submit" name="Delete" class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>


                <?php


            }
            if (isset($_POST["Delete"])) {
                $id = $value["idatracties"];
                echo $sql2 = "Delete from attracties where idatracties = '$id'";
                $conn->query($sql2);

            }
        } catch (PDOException $e) {
            echo $e->getMessage();

        }

        ?>


    </table>


    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
            style="position: left:0;top:0">
        Voeg Toe
    </button>


    <!-- Modal -->
    <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Voeg attracties toe </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="post">
                        <table class="table1">
                            <tr>
                                <td><label style="color:#3a87ad; font-size:18px;">Naam</label></td>
                                <td width="30"></td>
                                <td><input type="text" name="naam" placeholder="naam van het attracttie"/></td>
                            </tr>


                            <?php


                            try {
                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                                $stmt1 = $conn->prepare("SELECT  idsoortattractie,soort FROM soortattractie;");
                                $stmt1->execute();


                                $result = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
                                foreach ($stmt1 as $key => $value) {
                                    ?>


                                    <input type="radio" name="soortattractie"
                                           value="<?php echo $value["idsoortattractie"]; ?>"><?php echo $value["soort"]; ?>
                                    <br>
                                    <?php
                                }


                                if (isset($_POST["naam"]) && isset($_POST["soortattractie"])) {
                                    $sql1 = "INSERT INTO attracties (soortattractie_idsoortattractie,naam)
                         VALUES ('$_POST[soortattractie]', '$_POST[naam]')";
                                    $conn->query($sql1);
                                    echo '<META HTTP-EQUIV="Refresh" Content="4 ">';
                                }


                            } catch (PDOException $e) {
                                echo $e->getMessage();
                            }

                            ?>

                        </table>

                        <div class="modal-footer">
                            <button type="button" name="close" class="btn btn-secondary" data-dismiss="modal">Sluit
                            </button>

                            <button type="submit" name="Submit" class="btn btn-primary">Voeg</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>