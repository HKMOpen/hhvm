<?php
$xml = "<root></root>";
$xml = simplexml_load_string($xml);
$kids = $xml->children();
var_dump((bool)$kids);
if($kids) echo "bug\n"; else echo "ok\n";
if(!$kids) echo "ok\n"; else echo "bug\n";
?>
