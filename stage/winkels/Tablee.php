<html>
<head>
    <meta charset="UTF-8">
    <title>csv bestanden</title>
    <link rel="stylesheet" href="css/text.css">
</head>
<body>
<table>
    <?php
    echo '<tr>';
    $getallen = [
        [
            'left' => 1,
            'right' => -3,
        ],
        [
            'left' => 2,
            'right' => 4,
        ],
        [
            'left' => 3,
            'right' => 3,
        ],
        [
            'left' => 4,
            'right' => 2,
        ],
        [
            'left' => 3.0,
            'right' => 3,
        ],
    ];
    echo '</tr>';
    echo '<td>' . 'operators' . '</td>';
    echo '<td>' . '==' . '</td>';
    echo '<td>' . '!=' . '</td>';
    echo '<td>' . '>' . '</td>';
    echo '<td>' . '<' . '</td>';
    echo '<td>' . '=>' . '</td>';
    echo '<td>' . '=<' . '</td>';
    echo '<td>' . '===' . '</td>';
    echo '<td>' . '!==' . '</td>';
    echo '<td>' . '<>' . '</td>';

    foreach ($getallen as $operand) {


        echo '<tr>';
        echo '<td>'. $operand['left'].'....'.$operand['right'].'</td>';
        // ==
       $uitkomst = $operand['left'] == $operand['right'];
        if ($uitkomst==true){
            echo'<td class="true">'.'</td>';

        } else{
            echo'<td class="false">'.'</td>';
        }
        //!=
        $uitkomst = $operand['left'] != $operand['right'];
        if ($uitkomst==true){
            echo'<td class="true">'.'</td>';

        } else{
            echo'<td class="false">'.'</td>';
        }
        //>
        $uitkomst = $operand['left'] >$operand['right'];
        if ($uitkomst==true){
            echo'<td class="true">'.'</td>';

        } else{
            echo'<td class="false">'.'</td>';
        }
        //<
        $uitkomst = $operand['left'] < $operand['right'];
        if ($uitkomst==true){
            echo'<td class="true">'.'</td>';

        } else{
            echo'<td class="false">'.'</td>';
        }

        //=>
        $uitkomst = $operand['left']>= $operand['right'];
        if ($uitkomst==true){
            echo'<td class="true">'.'</td>';

        } else{
            echo'<td class="false">'.'</td>';
        }

        //=<
        $uitkomst = $operand['left'] <=$operand['right'];
        if ($uitkomst==true){
            echo'<td class="true">'.'</td>';

        } else{
            echo'<td class="false">'.'</td>';
        }

        // ===

        $uitkomst = $operand['left']=== $operand['right'];
        if ($uitkomst==true){
            echo'<td class="true">'.'</td>';

        } else{
            echo'<td class="false">'.'</td>';
        }

        //!==

        $uitkomst = $operand['left'] !== $operand['right'];
        if ($uitkomst==true){
            echo'<td class="true">'.'</td>';

        } else{
            echo'<td class="false">'.'</td>';
        }

        // <>
        $uitkomst = $operand['left'] <> $operand['right'];
        if ($uitkomst==true){
            echo'<td class="true">'.'</td>';

        } else{
            echo'<td class="false">'.'</td>';
        }


        echo '</tr>';





echo '<tr>';


        echo '<td>' .$operand['left'] . '(' . gettype($operand['left']) . ')' . '...' . $operand['right'] . '</td>';
        echo '<td>', $operand['left'] == $operand['right'] ? 'true' : 'false', '</td>';
        echo '<td>', $operand['left'] != $operand['right'] ? 'true' : 'false', '</td>';
        echo '<td>', $operand['left'] > $operand['right'] ? 'true' : 'false', '</td>';
       echo '<td>', $operand['left'] < $operand['right'] ? 'true' : 'false', '</td>';
        echo '<td>', $operand['left']>=$operand['right'] ? 'true' : 'false', '</td>';
       echo '<td>', $operand['left']<=  $operand['right'] ? 'true' : 'false', '</td>';
        echo '<td>', $operand['left']  === $operand['right'] ? 'true' : 'false', '</td>';
        echo '<td>', $operand['left'] !== $operand['right'] ? 'true' : 'false', '</td>';
        echo '<td>', $operand['left'] <> $operand['right'] ? 'true' : 'false', '</td>';

        echo '</tr>';


    }
    ?>
</table>
</body>
</html>