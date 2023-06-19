<?php

require_once("Veiculo.class.php");

class Carro extends Veiculo{

public $Motor;
public $Portas;
public $Passageiros;

function __construct($Fabricante, $Modelo, $Placa, $Renavan, $Chassi, $Cor,$Motor,$Portas,
$Passageiros) {

parent::__construct($Fabricante, $Modelo, $Placa, $Renavan, $Chassi, $Cor);

$this->Motor=$Motor;
$this->Portas=$Portas;
$this->Passageiros=$Passageiros;
}

function VerVeiculo(){
parent::VerVeiculo();
echo "<b>Motor: </b>{$this->Motor}<br />";
echo "<b>Número de Portas: </b>{$this->Portas}<br />";
echo "<b>Número de Passageiros: </b>{$this->Passageiros}";
echo "<hr />";
}
}


?>
