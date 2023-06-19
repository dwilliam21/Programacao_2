<?php

require_once("Veiculo.class.php");

class Moto extends Veiculo{

public $Motor;


function __construct($Fabricante, $Modelo, $Placa, $Renavan, $Chassi, $Cor,$Motor) {

parent::__construct($Fabricante, $Modelo, $Placa, $Renavan, $Chassi, $Cor);

$this->Motor=$Motor;
}

function VerVeiculo(){
parent::VerVeiculo();
echo "<b>Motor: </b>{$this->Motor}<br />";
echo "<hr />";
}
}