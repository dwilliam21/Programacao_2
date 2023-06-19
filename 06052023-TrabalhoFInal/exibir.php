<?php


echo '<!DOCTYPE html>';
echo '<html lang="pt">';
echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<title>Cadastro</title>';

    echo '<link rel="stylesheet" href="est.css">';

echo '</head>';
echo '<body>';
    
    echo '<div id="cab">';
        echo '<div><img src="univicosa_horizontal.png" alt="univicosa_horizontal" width="200px"></div>';
        echo '<div id="titulo">';
            echo '<h1>Página de cadastro</h1>';
        echo '</div>';
    echo '</div><br><br>';
    echo '<fieldset id=>';

 
$Tipo = $_POST['Tipo'];

if ($Tipo == 'Adm'){
     require_once('FuncionarioAdministrativo.class.php');
     $CPF = $_POST['cpf'];
     $Nome = $_POST['Nome'];
     $Sexo = $_POST['sexo'];
     $Endereco = $_POST['endereco'];
     $Telefone = $_POST['telefone'];
     $DataNascimento = $_POST['datanasc'];
     $Setor = $_POST['Setor'];
     $Cargo = $_POST['Cargo'];
     $Salario = $_POST['Salario'];
     $FuncionarioAdm1 = new FuncionarioAdm($CPF,$Nome,$Sexo,$Endereco,$Telefone,$DataNascimento,$Setor,$Cargo,$Salario);
     echo $FuncionarioAdm1->VerPessoa();
}

elseif ($Tipo == 'docente'){
    require_once('FuncionarioDocente.class.php');
    $CPF = $_POST['cpf'];
    $Nome = $_POST['Nome'];
    $Sexo = $_POST['sexo'];
    $Endereco = $_POST['endereco'];
    $Telefone = $_POST['telefone'];
    $DataNascimento = $_POST['datanasc'];
    $Cursos = $_POST['Cursos'];
    $Salario = $_POST['Salario'];
    $Disciplinas = $_POST['Disciplinas'];
    $Turmas = $_POST['Turmas'];
    $Funcionario1 = new FuncionarioDocente($CPF,$Nome,$Sexo,$Endereco,$Telefone,$DataNascimento,$Cursos,$Salario,$Disciplinas,$Turmas);
    echo $Funcionario1->VerPessoa();
}

elseif ($Tipo == 'discente'){
    require_once('Discente.class.php');
    $CPF = $_POST['cpf'];
    $Nome = $_POST['Nome'];
    $Sexo = $_POST['sexo'];
    $Endereco = $_POST['endereco'];
    $Telefone = $_POST['telefone'];
    $DataNascimento = $_POST['datanasc'];
    $Curso = $_POST['Cursos'];
    $Disciplinas = $_POST['Disciplinas'];
    $Turmas = $_POST['Turmas'];
    $Discente1 = new Discente($CPF,$Nome,$Sexo,$Endereco,$Telefone,$DataNascimento,$Curso,$Disciplinas,$Turmas);
    echo $Discente1->VerPessoa();
}

echo '</fieldset>';
echo '</body>';
 echo '</html>';
?>