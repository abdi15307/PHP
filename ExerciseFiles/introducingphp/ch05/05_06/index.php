<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Multiplication Table</h1>
<table>
    <?php
    $invoer = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
    echo '<tr>';
    echo '<th>&nbsp;</th>';
    for ($col = 1; $col <= count($invoer); $col++) :
        echo "<th>$col</th>";
    endfor;
    echo '</tr>';

    for ($row = 1, $col = 1; $row <= count($invoer); $row++) :
        echo '<tr>';

        if ($col == 1) {
            echo "<th>$row</th>";
        }
        while ($col <= count($invoer)) :
            echo '<td>' . $row * $col++ . '</td>';
        endwhile;
        echo '</tr>';

        $col = 1;
    endfor;
    ?>

</table>
</body>
</html>