<?php
declare(strict_types = 1);
set_time_limit(0);
/**
 * Created by PhpStorm.
 * User: Said Abdihaq
 * Date: 17-7-2017
 * Time: 11:22
 */

$bestand = fopen('bestanden/Deen Supermarkten - DTG Grootzakelijk - 2017-07-14 at 08-23.csv', 'rb');
$foundAddress = fopen('juisteadressen.txt', 'w');
$header = null;
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>csv bestanden</title>
    <link rel="stylesheet" href="css/text.css">
</head>
<body>
<table>

    <tr>
        <td> Opgestuurd naar google</td>
        <td> Aantal gevonden adressen</td>
        <td> Terug gegeven als Resultaat</td>
        <td>Adres</td>
        <td> Postcode&stad</td>
        <td> Land</td>


        <td>Link naar Google API Url</td>
        <td>Place ID</td>

    </tr>


    <?php
    while (($data = fgetcsv($bestand, 1000, ";")) !== false) {
        if ($header === null) {
            $header = $data;
        } else if (empty(array_filter($data))) {
            continue;
        } else {
            $url = getGoogleUrl($data);
            $decode = getJsonFromUrl($url);
            echo '<pre>';

            //var_dump(data);
            processResults($decode->results, $data);
            overwrite($decode->results, $data);

        }

    }


    function overwrite(array $results, $data)
    {


        $foundedadressen = fopen('juisteadressen.txt', 'a');
        foreach ($results as $result) {
            $merge = array_merge($data, [$result->formatted_address]);
            fputcsv($foundedadressen, $merge);

        }

    }

    function explodeReverse(string $delimiter, string $formattedAddress, int $limit): array
    {
        $address = explode($delimiter, $formattedAddress);
        $parts = array_splice($address, 1 - $limit);
        array_unshift($parts, implode($address, $delimiter));

        return $parts;
    }

    function processResults(array $results, array $data): void
    {
        if (hasNoResults($results)) {
            echo "<tr>";
            echo "<td>", dataToString($data);
            echo "<td bgcolor='red'>" . 'LEEG';

            echo "<td>" . '<a target="_blank" href="' . getGoogleUrl($data) . '">' . getGoogleUrl($data) . '</a>';
        } else if (hasManyResults($results)) {
            handleManyResults($results, $data);
        } else {
            handleSingleResult($results[0], $data);
        }

    }

    function handleSingleResult($result, array$data)
    {

        $adres = explodeReverse(', ', $result->formatted_address, 3);
        //var_dump($adres);
        $aantaladressen = count($result);

        echo "<tr>";
        echo "<td>" . dataToString($data) . '</td>';
        echo '<td>' . $aantaladressen . '</td>';

        echo '<td class="handlesingelresult">' . ($result->formatted_address) . '</td>';

        echo '<td>' . $adres[0] . '</td>';
        echo '<td>' . $adres[1] . '</td>';
        echo '<td>' . $adres[2] . '</td>';
        echo "<td>" . '<a target="_blank" href="' . getGoogleUrl($data) . '">clik hier om naar google API te gaan</a></td>';
        echo '<td>' . ($result->place_id) . '</td>';
        echo "</tr>";

    }

    function handleManyResults($results, array $data)
    {
        $aantaladressen = count($results);

        for ($R = 0; $R < count($results); $R++) {

            $derestvanhetadres = explodeReverse(', ', $results[$R]->formatted_address, 3);

            echo "<tr>";
            echo "<td>" . (($R == 0) ? dataToString($data) : '') . '</td>';
            echo '<td>' . (($R == 0) ? $aantaladressen : '') . '</td>';
            echo '<td bgcolor="orange">' . ($results[$R]->formatted_address) . '</td>';
            echo '<td>' . $derestvanhetadres[0] . '</td>';
            echo '<td>' . $derestvanhetadres[1] . '</td>';
            echo '<td>' . $derestvanhetadres[2] . '</td>';

            echo "<td>", '<a target="_blank" href="' . getGoogleUrl($data) . '">Click hier om naar Google API te gaan</a>' . '</td>';
            echo '<td>' . ($results[$R]->place_id) . '</td>';
            echo "</tr>";

        }

    }

    function hasNoResults(array $results): bool
    {
        return $results == [];
    }

    function hasManyResults(array $results): bool
    {
        return count($results) > 1;
    }

    function getJsonFromUrl(string $url)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Accept-Language: nl,fr,nl-be,fr-be'
        ]);
        $transfer = curl_exec($curl);
        return json_decode($transfer);
    }

    function getGoogleUrl(array $data): string
    {
        $a = dataToString($data);
        $b = urlencode($a);

        return sprintf(
            'https://maps.googleapis.com/maps/api/place/textsearch/json?query=%s&key=AIzaSyDuySBZiZmSIhKoV172b_jPU5TPi0LhGhs',
            $b
        );
    }

    function dataToString(array $data): string
    {
        $var = '';
        foreach ($data as $value) {
            $var .= ' ' . $value;
        }
        return $var;
    }

    ?>
</table>
</body>
</html>