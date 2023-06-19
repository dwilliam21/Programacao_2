<?php

class Carro{

 public $Fabrica;
 public $Modelo;
 public $Portas;
 public $Cor;
 public $AnoFabricacao;

function __construct($Fabrica,$Modelo,$Portas,$Cor,$AnoFabricacao) {
$this->Fabrica=$Fabrica;
$this->Modelo=$Modelo;
$this->Portas=$Portas;
$this->Cor=$Cor;
$this->AnoFabricacao=$AnoFabricacao;
}

function VerCarro(){
echo "<h2>" .$this->Fabrica." - ". $this->Modelo . "</h2>";
echo "<p> <b>Portas:</b> " . $this->Portas . "</p>";
echo "<p> <b>Cor:</b> " .$this->Cor . "</p>";
echo "<p> <b>Ano de Fabricação:</b> " .$this->AnoFabricacao . "</p>";
echo "<hr>";
}
}
?>
