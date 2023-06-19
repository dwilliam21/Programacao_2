<?php
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<title>Página de cadastro</title>";
echo "<meta charset='utf-8'>";
echo '<link rel="stylesheet" href="estilo.css">';
echo "</head>";
echo "<body id='exibir'>";
echo "<h1 id=''>Lista de peças</h1>";
echo "</body>";
echo "</html>";

$Peca = $_POST['Peca'];


if ($Peca == 'Motor'){
    require_once("Motor.Class.php");
    $Nome = $_POST['Nome'];
    $Custo = $_POST['Custo'];
    $Distribuidor = $_POST['Distribuidor'];
    $Rendimento = $_POST['Rendimento'];
    $Consumo = $_POST['Consumo'];
    $Motor1 = new Motor($Nome,$Custo,$Distribuidor,$Rendimento,$Consumo);
    echo $Motor1->VerPeça();

} elseif($Peca == 'Pneu'){
    require_once("Pneu.class.php");
    $Nome = $_POST['Nome'];
    $Custo = $_POST['Custo'];
    $Distribuidor = $_POST['Distribuidor'];
    $Tipo = $_POST['Tipo'];
    $Tamanho = $_POST['Tamanho'];
    $Marca = $_POST['Marca'];
    $Pneu1 = new Pneu($Nome,$Custo,$Distribuidor,$Tipo,$Tamanho,$Marca);
    echo $Pneu1->VerPeça();

} else{
    require_once("Roda.Class.php");
    $Nome = $_POST['Nome'];
    $Custo = $_POST['Custo'];
    $Distribuidor = $_POST['Distribuidor'];
    $Tipo = $_POST['Tipo'];
    $Tamanho = $_POST['Tamanho'];
    $Marca = $_POST['Marca'];
    $Roda1 = new Roda($Nome,$Custo,$Distribuidor,$Tipo,$Tamanho);
    echo $Roda1->VerPeça();
}
?>