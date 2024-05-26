<?php
$xml = simplexml_load_file('flori.xml');

foreach ($xml->floare as $floare) {
    if ($floare->nume == 'toporasi') {
        $floare->nume = 'lalele';
    }
}

$xml->asXML('flori.xml');
echo "Record updatad successfully";
?>
