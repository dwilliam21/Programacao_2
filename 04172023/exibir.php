<?php
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<title>Página de cadastro</title>";
echo "<meta charset='utf-8'>";
echo '<link rel="stylesheet" href="estilo.css">';
echo "</head>";
echo "<body id='exibir'>";
echo "</body>";
echo "</html>";

$Veiculo = $_POST['Veiculo'];


if ($Veiculo == 'Carro'){
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
} elseif($Veiculo == 'Moto'){
    require_once("Moto.class.php");
    $Fabricante = $_POST['Fabricante'];
    $Modelo = $_POST['Modelo'];
    $Placa = $_POST['Placa'];
    $Renavan = $_POST['Renavan'];
    $Chassi = $_POST['Chassi'];
    $Cor = $_POST['Cor'];
    $Motor = $_POST['Motor'];
    $moto1 = new Moto($Fabricante,$Modelo,$Placa,$Renavan,$Chassi,$Cor,$Motor);
    echo $moto1->VerVeiculo();
} else{
    require_once("Caminhao.class.php");
    $Fabricante = $_POST['Fabricante'];
    $Modelo = $_POST['Modelo'];
    $Placa = $_POST['Placa'];
    $Renavan = $_POST['Renavan'];
    $Chassi = $_POST['Chassi'];
    $Cor = $_POST['Cor'];
    $Motor = $_POST['Motor'];
    $Carga = $_POST ['Carga'];
    $caminhao1 = new Caminhao($Fabricante,$Modelo,$Placa,$Renavan,$Chassi,$Cor,$Motor,$Carga);
    echo $caminhao1->VerVeiculo();
}
?>