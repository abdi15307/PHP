<?php
function dump (...$values) {
    foreach($values as $value) {
        echo '<pre>';
        var_dump($value);
        echo '</pre>';
    }
}

$json = '[{"html_attributions":[],"results":[{"formatted_address":"Turnhoutsebaan 169, 2140 Antwerpen, Belgium","geometry":{"location":{"lat":51.2148321,"lng":4.4355088},"viewport":{"northeast":{"lat":51.2161413802915,"lng":4.436837780291502},"southwest":{"lat":51.2134434197085,"lng":4.434139819708498}}},"icon":"https://maps.gstatic.com/mapfiles/place_api/icons/geocode-71.png","id":"2875d1d07bc0883a164894af827a2e40fc225981","name":"Turnhoutsebaan 169","place_id":"ChIJC9VHGAz3w0cRXqQnoq9-W40","reference":"CmRbAAAAT8zlKmpo9N2IyFjSfFxPm52rdJoXo90akEdfyrMmdIVEp1KrDH6ThnaPb3aW5kYvDnsOsKwi4fTYkbW0P08a5O7DNdpV1CEYVJeolr15_gkYwlXeEBgVoePS_6jKLEG1EhACwZszeOxcJ8_CglNc9UdCGhTtsP7yDsiX92YMR3mjHHVyWeCPSg","types":["street_address"]},{"formatted_address":"Turnhoutsebaan 169, 2970 Schilde, Belgium","geometry":{"location":{"lat":51.24023979999999,"lng":4.581539800000001},"viewport":{"northeast":{"lat":51.2415463802915,"lng":4.582942230291501},"southwest":{"lat":51.2388484197085,"lng":4.580244269708498}}},"icon":"https://maps.gstatic.com/mapfiles/place_api/icons/geocode-71.png","id":"a5d63512bfbd0320a22c88fa945bb270bf3142cc","name":"Turnhoutsebaan 169","place_id":"ChIJpfWXGUn_w0cR7JVl1aT2dDE","reference":"CmRbAAAAipCA7JKJs53U5Z7Pf4iLajmAy_DXTL3ughjqmgj_pZddzq7LR5aH8D3GYGdbHyzjPRIZEEu-sjvUtSzhNG15xXsptUpEJrBvgh_1sEhr46h1QNmRkJft0Hiq5HmmV_0OEhCmd0chfOgoqfjvy0GeGOD9GhS9REwBSWofG9wROZowo8ABEpL9Nw","types":["street_address"]}],"status":"OK"}]';


$ar = json_decode($json);
// access first element of $ar array
//$founded= $ar[2];
//echo $ar[0]('8'); // apple
dump($ar[0]);