<html>
<head>
<title>d</title>
<meta charset="utf-8">
</head>
<?php
require_once("Carro.class.php");
$carro1 = new Carro("Ford","Escort",2,"Azul",1994);
$carro2 = new Carro("Fiat","Uno",4,"Preto",2000);
echo $carro1->VerCarro();
echo $carro2->VerCarro();
?>
</html>
