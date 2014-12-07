<?php
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();

$geoplugin->locate();

echo "Geolocation results for {$geoplugin->ip}: <br />\n".
    "City: {$geoplugin->city} <br />\n".
    "Region: {$geoplugin->region} <br />\n".
    "Country Code: {$geoplugin->countryCode} <br />\n".
    "Longitude: {$geoplugin->longitude} <br />\n".
    "Latitude: {$geoplugin->latitude} <br />\n".


/* find places nearby */
$nearby = $geoplugin->nearby();
if ( isset($nearby[0]['geoplugin_place']) ) {
    echo "<pre><p>Some places you may wish to visit near " . $geoplugin->city . ": </p>\n";
    foreach ( $nearby as $key => $array ) {
 
        echo ($key + 1) .":<br />";
        echo "\t Place: " . $array['geoplugin_place'] . "<br />";
        echo "\t Country Code: " . $array['geoplugin_countryCode'] . "<br />";
        echo "\t Region: " . $array['geoplugin_region'] . "<br />";
        echo "\t County: " . $array['geoplugin_county'] . "<br />";
        echo "\t Latitude: " . $array['geoplugin_latitude'] . "<br />";
        echo "\t Longitude: " . $array['geoplugin_longitude'] . "<br />";
        echo "\t Distance (miles): " . $array['geoplugin_distanceMiles'] . "<br />";
        echo "\t Distance (km): " . $array['geoplugin_distanceKilometers'] . "<br />";
 
    }
    echo "</pre>\n";
}
?>