<?php

class Convertitore {

    public function metriAPollici($metri) {
        return $metri * 39.3701;
    }

    public function polliciAMetri($pollici) {
        return $pollici / 39.3701;
    }
}

$server = new SoapServer("convertitore.wsdl");
$server->setClass("Convertitore");
$server->handle();
?>