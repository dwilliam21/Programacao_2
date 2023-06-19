<?php
require_once("Carro.class.php");
$Fabricante = $_POST['Fabricante'];
$Modelo = $_POST['Modelo'];
$Placa = $_POST['Placa'];
$Renavan = $_POST['Renavan'];
$Chassi = $_POST['Chassi'];
$Cor = $_POST['Cor'];
$Motor = $_POST['Motor'];
$Portas = $_POST['Portas'];
$Passageiros = $_POST['Passageiros'];
$carro1 = new Carro($Fabricante,$Modelo,$Placa,$Renavan,$Chassi,$Cor,$Motor,$Portas,
$Passageiros);
echo $carro1->VerVeiculo();
?>
