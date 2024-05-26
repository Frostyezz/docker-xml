<?php
$xml = simplexml_load_file('flori.xml');

foreach ($xml->flori as $index => $floare) {
    if ($floare->nume == 'lalele') {
        unset($xml->$floare[$index]);
    }
}

$xml->asXML('flori.xml');
echo "Record updatad successfully";
?>
