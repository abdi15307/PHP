

<?php


include_once 'form.php';

$adres          = "[adres]";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://maps.googleapis.com/maps/api/place/textsearch/json?query=".$_POST['adres']."&key=AIzaSyDuySBZiZmSIhKoV172b_jPU5TPi0LhGhs");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    $transfer = curl_exec($curl);

   echo '<pre>';
    echo $transfer;


//*var_dump(curl_error($curl));
//var_dump($transfer);
//var_dump(curl_getinfo($curl));
//AIzaSyBx5B2P0BI1BNLcJfqH3Yyuc1LRJDYbmbM
