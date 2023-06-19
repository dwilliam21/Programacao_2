<?php
echo '<!DOCTYPE html>';
echo '<html lang="pt">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Valor do Veiculo</title>';
echo '<link rel="stylesheet" href="estilo.css">';
echo '</head>';
echo '<body>';
echo '<h1 align=center>Preço do Veiculo</h1>';
echo '</body>';
echo '</html>';

$Tipo = $_POST['Tipo'];

if ($Tipo == 'Particular'){

    echo "<h1 align='center'>Particular</h1>";
    require_once('VeiculoParticular.class.php');
    $Fabricante = $_POST['Fabricante'];
    $Modelo = $_POST['Modelo'];
    $ValorVeiculo = $_POST['ValorVeiculo'];
    $Veiculo1 = new VeiculoParticular($Fabricante,$Modelo,$ValorVeiculo);
    echo $Veiculo1->VerVeiculo();
} else{

    echo "<h1 align='center'>Aluguel</h1>";
    require_once('VeiculoAluguel.class.php');
    $Fabricante = $_POST['Fabricante'];
    $Modelo = $_POST['Modelo'];
    $ValorVeiculo = $_POST['ValorVeiculo'];
    $Veiculo1 = new VeiculoAluguel($Fabricante,$Modelo,$ValorVeiculo);
    echo $Veiculo1->VerVeiculo();
}

?>
