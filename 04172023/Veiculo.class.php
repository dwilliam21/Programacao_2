
<?php

class Veiculo{

public $Fabricante;
public $Modelo;
public $Placa;
public $Renavan;
public $Chassi;
public $Cor;

function __construct($Fabricante,$Modelo,$Placa,$Renavan,$Chassi,$Cor){

$this->Fabricante=$Fabricante;
$this->Modelo=$Modelo;
$this->Placa=$Placa;
$this->Renavan=$Renavan;
$this->Chassi=$Chassi;
$this->Cor=$Cor;

}

function VerVeiculo(){
echo "<b>Fabricante: </b>{$this->Fabricante}<br />";
echo "<b>Modelo</b>: {$this->Modelo}<br />";
echo "<b>Placa: </b>{$this->Placa}<br />";
echo "<b>Renavan: </b>{$this->Renavan}<br />";
echo "<b>Chassi: </b>{$this->Chassi}<br />";
echo "<b>Cor: </b>{$this->Cor}<br />";
}
}
?>
