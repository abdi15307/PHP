<?php
function getArtiest(){
        return ["said" => "pitpiraat",
                "dillion" => "Hello" , "Stephan" => "Eva"];
}
?>

<!doctype html>
<html>
<body>
<section>
        <b>

        </b>
        <br>
</section>
<table>
        <tr>
                <td>Artiest</td>
                <td>Album</td>
        </tr>

<?php
        $albums = getArtiest();
        foreach ($albums as $artist => $item) :
?>
                <tr>
                        <td><?= $artist ?></td>
                        <td><?= $item ?></td>
                </tr>
<?php
        endforeach;

?>
</table>
</body>
</html>
