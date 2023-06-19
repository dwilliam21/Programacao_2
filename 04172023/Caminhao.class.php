<?php

require_once("Veiculo.class.php");

class Caminhao extends Veiculo{

public $Motor;
public $Carga;

function __construct($Fabricante, $Modelo, $Placa, $Renavan, $Chassi, $Cor,$Motor,$Carga) {

parent::__construct($Fabricante, $Modelo, $Placa, $Renavan, $Chassi, $Cor);

$this->Motor=$Motor;
$this->Carga=$Carga;
}

function VerVeiculo(){
parent::VerVeiculo();
echo "<b>Motor: </b>{$this->Motor}<br />";
echo "<b>Carga maxíma: </b>{$this->Carga}<br />";
echo "<hr />";
}
}


?>