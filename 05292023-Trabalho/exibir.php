<?php
    echo '<!DOCTYPE html>';
    echo '<html lang="pt">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<title>Cadastro de Salário</title>';
    echo '<link rel="stylesheet" href="estilo.css">';
    echo '</head>';
    echo '<body>';
    echo '<h1>Cadastro de Salário</h1>';
    
    $Funcionario = $_POST['funcionario'];

    if ($Funcionario == 'horista'){

        echo "<div id='exibir'>";

            require_once("FuncionarioHorista.class.php");
            $Nome = $_POST['Nome'];
            $Documento = $_POST['documento'];
            $NumeroHoras = $_POST['horas'];
            $ValorSalario = $_POST['valor'];
            $Funcionario1 = new FuncionarioHorista($Nome,$Documento,$NumeroHoras,$ValorSalario);
            echo $Funcionario1->VerFuncionario();

        echo "</div>";
    } else{

        echo "<div id='exibir'>";

            require_once("FuncionarioFixo.class.php");
            $Nome = $_POST['Nome'];
            $Documento = $_POST['documento'];
            $NumeroHoras = $_POST['horas'];
            $ValorSalario = $_POST['valor'];
            $Funcionario1 = new FuncionarioFixo($Nome,$Documento,$NumeroHoras,$ValorSalario);
            echo $Funcionario1->VerFuncionario();

        echo "</div>";
    }

    echo '</body>';
    echo '</html>';
?>