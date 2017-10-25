<?php
$results = [];
processResults($results);
echo '<br/>';
echo '<hr/>';
$results = json_decode('[{
         "formatted_address" : "Cantabria, Spanje",
         "geometry" : {
            "location" : {
               "lat" : 43.1828396,
               "lng" : -3.9878427
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 43.5136929,
                  "lng" : -3.149652
               },
               "southwest" : {
                  "lat" : 42.75804979999999,
                  "lng" : -4.8517782
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/geocode-71.png",
         "id" : "6611e4511cd55aaed725d289e0e25e71bdaedc8b",
         "name" : "Cantabria",
         "photos" : [
            {
               "height" : 2304,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/108292947225562531647/photos\"\u003eEsther Lara\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAtf_aDaSPC4XBQjOEPRETG3OVJ4mrMbWwmLrpeESp34fxZ9r38OvAa7iLP1TJifpv0cNk-p434-_2FraZaNAjK1_eHGYzD0idlLBPgtAlVc_-hk20Q5cSKY18Xkl7ja5kEhD1xxnVCFVN2Qz4dN7YWWPUGhTjvQ1e1MMKX4_XKjOrYvL5kf71dg",
               "width" : 4096
            }
         ],
         "place_id" : "ChIJy78OCdsgSQ0RoMvJc4L1BAM",
         "reference" : "CmRbAAAAnZS7mi1NHTPc82gZeMUl1pWJ0eWjOBrWcPkvQ9WoKBekig7bATUM-A1NAipyC8aCk5IO5qQETp7xFWtryqEy1Keq-S1vwKUEFWL6HXu38q5dNmRQXgQgCa_SyPOR00vVEhCq6THzoAMZ67yTuWeVjg-gGhRDA4c0DmNvwCGnF8YAiwpS14z-hw",
         "types" : [ "administrative_area_level_2", "political" ]
      }
]');
processResults($results);

echo '<br/>';
echo '<hr/>';
echo 'Maanlander 11<br/>';
echo ' - printerweg 22<br/>';

echo '<br/>';
echo '<br/>';
echo '<br/>';
$results = json_decode('[{
         "formatted_address" : "Maanlander 11",
         "geometry" : {
            "location" : {
               "lat" : 43.1828396,
               "lng" : -3.9878427
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 43.5136929,
                  "lng" : -3.149652
               },
               "southwest" : {
                  "lat" : 42.75804979999999,
                  "lng" : -4.8517782
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/geocode-71.png",
         "id" : "6611e4511cd55aaed725d289e0e25e71bdaedc8b",
         "name" : "Cantabria",
         "photos" : [
            {
               "height" : 2304,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/108292947225562531647/photos\"\u003eEsther Lara\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAtf_aDaSPC4XBQjOEPRETG3OVJ4mrMbWwmLrpeESp34fxZ9r38OvAa7iLP1TJifpv0cNk-p434-_2FraZaNAjK1_eHGYzD0idlLBPgtAlVc_-hk20Q5cSKY18Xkl7ja5kEhD1xxnVCFVN2Qz4dN7YWWPUGhTjvQ1e1MMKX4_XKjOrYvL5kf71dg",
               "width" : 4096
            }
         ],
         "place_id" : "ChIJy78OCdsgSQ0RoMvJc4L1BAM",
         "reference" : "CmRbAAAAnZS7mi1NHTPc82gZeMUl1pWJ0eWjOBrWcPkvQ9WoKBekig7bATUM-A1NAipyC8aCk5IO5qQETp7xFWtryqEy1Keq-S1vwKUEFWL6HXu38q5dNmRQXgQgCa_SyPOR00vVEhCq6THzoAMZ67yTuWeVjg-gGhRDA4c0DmNvwCGnF8YAiwpS14z-hw",
         "types" : [ "administrative_area_level_2", "political" ]
      }, {
         "formatted_address" : "Printerweg 22",
         "geometry" : {
            "location" : {
               "lat" : 43.1828396,
               "lng" : -3.9878427
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 43.5136929,
                  "lng" : -3.149652
               },
               "southwest" : {
                  "lat" : 42.75804979999999,
                  "lng" : -4.8517782
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/geocode-71.png",
         "id" : "6611e4511cd55aaed725d289e0e25e71bdaedc8b",
         "name" : "Cantabria",
         "photos" : [
            {
               "height" : 2304,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/108292947225562531647/photos\"\u003eEsther Lara\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAtf_aDaSPC4XBQjOEPRETG3OVJ4mrMbWwmLrpeESp34fxZ9r38OvAa7iLP1TJifpv0cNk-p434-_2FraZaNAjK1_eHGYzD0idlLBPgtAlVc_-hk20Q5cSKY18Xkl7ja5kEhD1xxnVCFVN2Qz4dN7YWWPUGhTjvQ1e1MMKX4_XKjOrYvL5kf71dg",
               "width" : 4096
            }
         ],
         "place_id" : "ChIJy78OCdsgSQ0RoMvJc4L1BAM",
         "reference" : "CmRbAAAAnZS7mi1NHTPc82gZeMUl1pWJ0eWjOBrWcPkvQ9WoKBekig7bATUM-A1NAipyC8aCk5IO5qQETp7xFWtryqEy1Keq-S1vwKUEFWL6HXu38q5dNmRQXgQgCa_SyPOR00vVEhCq6THzoAMZ67yTuWeVjg-gGhRDA4c0DmNvwCGnF8YAiwpS14z-hw",
         "types" : [ "administrative_area_level_2", "political" ]
      }
]');
processResults($results);
echo '<br/>';
echo '<hr/>';
echo 'Maanlander 11<br/>';
echo ' - printerweg 22<br/>';
echo ' - foobarlaan 1<br/>';

echo '<br/>';
echo '<br/>';
echo '<br/>';
$results = json_decode('[{
         "formatted_address" : "Maanlander 11",
         "geometry" : {
            "location" : {
               "lat" : 43.1828396,
               "lng" : -3.9878427
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 43.5136929,
                  "lng" : -3.149652
               },
               "southwest" : {
                  "lat" : 42.75804979999999,
                  "lng" : -4.8517782
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/geocode-71.png",
         "id" : "6611e4511cd55aaed725d289e0e25e71bdaedc8b",
         "name" : "Cantabria",
         "photos" : [
            {
               "height" : 2304,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/108292947225562531647/photos\"\u003eEsther Lara\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAtf_aDaSPC4XBQjOEPRETG3OVJ4mrMbWwmLrpeESp34fxZ9r38OvAa7iLP1TJifpv0cNk-p434-_2FraZaNAjK1_eHGYzD0idlLBPgtAlVc_-hk20Q5cSKY18Xkl7ja5kEhD1xxnVCFVN2Qz4dN7YWWPUGhTjvQ1e1MMKX4_XKjOrYvL5kf71dg",
               "width" : 4096
            }
         ],
         "place_id" : "ChIJy78OCdsgSQ0RoMvJc4L1BAM",
         "reference" : "CmRbAAAAnZS7mi1NHTPc82gZeMUl1pWJ0eWjOBrWcPkvQ9WoKBekig7bATUM-A1NAipyC8aCk5IO5qQETp7xFWtryqEy1Keq-S1vwKUEFWL6HXu38q5dNmRQXgQgCa_SyPOR00vVEhCq6THzoAMZ67yTuWeVjg-gGhRDA4c0DmNvwCGnF8YAiwpS14z-hw",
         "types" : [ "administrative_area_level_2", "political" ]
      }, {
         "formatted_address" : "Printerweg 22",
         "geometry" : {
            "location" : {
               "lat" : 43.1828396,
               "lng" : -3.9878427
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 43.5136929,
                  "lng" : -3.149652
               },
               "southwest" : {
                  "lat" : 42.75804979999999,
                  "lng" : -4.8517782
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/geocode-71.png",
         "id" : "6611e4511cd55aaed725d289e0e25e71bdaedc8b",
         "name" : "Cantabria",
         "photos" : [
            {
               "height" : 2304,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/108292947225562531647/photos\"\u003eEsther Lara\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAtf_aDaSPC4XBQjOEPRETG3OVJ4mrMbWwmLrpeESp34fxZ9r38OvAa7iLP1TJifpv0cNk-p434-_2FraZaNAjK1_eHGYzD0idlLBPgtAlVc_-hk20Q5cSKY18Xkl7ja5kEhD1xxnVCFVN2Qz4dN7YWWPUGhTjvQ1e1MMKX4_XKjOrYvL5kf71dg",
               "width" : 4096
            }
         ],
         "place_id" : "ChIJy78OCdsgSQ0RoMvJc4L1BAM",
         "reference" : "CmRbAAAAnZS7mi1NHTPc82gZeMUl1pWJ0eWjOBrWcPkvQ9WoKBekig7bATUM-A1NAipyC8aCk5IO5qQETp7xFWtryqEy1Keq-S1vwKUEFWL6HXu38q5dNmRQXgQgCa_SyPOR00vVEhCq6THzoAMZ67yTuWeVjg-gGhRDA4c0DmNvwCGnF8YAiwpS14z-hw",
         "types" : [ "administrative_area_level_2", "political" ]
      }, {
         "formatted_address" : "Foobarlaan 1",
         "geometry" : {
            "location" : {
               "lat" : 43.1828396,
               "lng" : -3.9878427
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 43.5136929,
                  "lng" : -3.149652
               },
               "southwest" : {
                  "lat" : 42.75804979999999,
                  "lng" : -4.8517782
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/geocode-71.png",
         "id" : "6611e4511cd55aaed725d289e0e25e71bdaedc8b",
         "name" : "Cantabria",
         "photos" : [
            {
               "height" : 2304,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/108292947225562531647/photos\"\u003eEsther Lara\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAtf_aDaSPC4XBQjOEPRETG3OVJ4mrMbWwmLrpeESp34fxZ9r38OvAa7iLP1TJifpv0cNk-p434-_2FraZaNAjK1_eHGYzD0idlLBPgtAlVc_-hk20Q5cSKY18Xkl7ja5kEhD1xxnVCFVN2Qz4dN7YWWPUGhTjvQ1e1MMKX4_XKjOrYvL5kf71dg",
               "width" : 4096
            }
         ],
         "place_id" : "ChIJy78OCdsgSQ0RoMvJc4L1BAM",
         "reference" : "CmRbAAAAnZS7mi1NHTPc82gZeMUl1pWJ0eWjOBrWcPkvQ9WoKBekig7bATUM-A1NAipyC8aCk5IO5qQETp7xFWtryqEy1Keq-S1vwKUEFWL6HXu38q5dNmRQXgQgCa_SyPOR00vVEhCq6THzoAMZ67yTuWeVjg-gGhRDA4c0DmNvwCGnF8YAiwpS14z-hw",
         "types" : [ "administrative_area_level_2", "political" ]
      }
]');
processResults($results);

function processResults(array $results): void
{
    if (hasNoResults($results)) {
        echo 'leeg';
    } else if (hasManyResults($results)) {
        handleManyResults($results);
    } else {
        handleSingleResult($results[0]);
    }
}

function handleSingleResult($result)
{
    echo($result->formatted_address);
}

function handleManyResults($results)
{
   echo($results[0]->formatted_address);


    for ($R = 1; $R<count($results); $R++) {
        echo '<pre>';
        echo'-'.($results[$R]->formatted_address);
        echo '<pre>';


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

