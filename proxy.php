<?php
header("Content-Type: application/json");

try {
    $valore = $_GET["valore"];
    $tipo = $_GET["tipo"];

    $client = new SoapClient("convertitore.wsdl");

    if ($tipo == "metri_pollici") {
        $risultato = $client->metriAPollici($valore);
    } else {
        $risultato = $client->polliciAMetri($valore);
    }

    echo json_encode(["risultato" => $risultato]);

} catch (Exception $e) {
    echo json_encode(["errore" => $e->getMessage()]);
}
?>