<?php
$client = new SoapClient("convertitore.wsdl");

echo "Metri → Pollici: " . $client->metriAPollici(1) . "<br>";
echo "Pollici → Metri: " . $client->polliciAMetri(39.3701);
?>