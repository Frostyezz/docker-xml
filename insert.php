<?php
$xml = simplexml_load_file('flori.xml');

// Create a new floare element
$newFloare = $xml->addChild('floare');
$newFloare->addChild('nume', 'toporasi');
$newFloare->addChild('culoare', 'mov');
$newFloare->addChild('marime', 'medii');
$newFloare->addChild('pret', '80');

$xml->asXML('flori.xml');

echo "Record inserted successfully";
?>