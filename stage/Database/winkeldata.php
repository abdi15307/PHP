<html>
<head>
    <meta charset="UTF-8">
    <title>winkelData</title>
    <link rel="stylesheet" href="css/text.css">
</head>
<body>
<table border="1" style="width: 100%">
    <tr>

        <td> winkelnaam</td>
        <td> winkeladress</td>
        <td> postcode</td>
        <td> stad</td>
        <td> stadId</td>
        <td> Berdijf</td>
        <td> Bedrijfsid</td>

    </tr>

    <?php

    $handle = fopen("winkellijst.csv", "r");
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {


        $servername = "localhost";
        $dbname = "winkel";
        $username = "root";
        $password = "Abdihaq12@";


        

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT p.id, p.name FROM place p  where p.name = '$data[3]';");
            $stmt->execute();

            $stmt2 = $conn->prepare("SELECT c.id, c.name FROM company c  where c.name = '$data[4]';");
            $stmt2->execute();
            $placeid= $stmt->fetch();
            $companyid= $stmt2->fetch();


        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $sql = "INSERT INTO shop (name, address, zip,place_id,company_id)
        VALUES ('$data[0]', '$data[1]', '$data[2]','$placeid[id]','$companyid[id]')";
        if ($conn->query($sql) === TRUE) {
            echo "winkels zijn toegevoegd";
        }


               ?>
        <tr>
            <td> <?php echo $data[0]; ?> </td>
            <td> <?php echo $data[1]; ?> </td>
            <td> <?php echo $data[2]; ?> </td>
            <td> <?php echo $data[3]; ?> </td>
            <td> <?php echo $placeid["id"]; ?></td>
            <td> <?php echo $data[4]; ?> </td>
            <td> <?php echo $companyid["id"]; ?> </td>
        </tr>

        <?php

    }

    ?>
</table>
</body>
</html>



