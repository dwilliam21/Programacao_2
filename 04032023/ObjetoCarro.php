<html>

<head>
    <title></title>
    <meta charset="utf-8">
</head>

<?php
$Marca = $_POST['Marca'];
$Modelo = $_POST['Modelo'];
require_once("Carro.class.php");
$carro1 = new Carro($Marca, $Modelo);

echo $carro1->VerCarro();

?>

</html>