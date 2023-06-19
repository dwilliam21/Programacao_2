<?php


$Tipo = $_POST['tipo'];

if ($Tipo == 'adm'){
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
        echo'<div id="cab">';
            echo '<div><img src="univicosa_horizontal.png" alt="univicosa_horizontal" width="200px"></div>';
            echo '<div id="titulo">';
                echo '<h1>Página de cadastro - Administrativo</h1>';
            echo '</div>';
        echo '</div><br><br>';

        echo '<fieldset>';
            echo '<legend>Dados:</legend>';
            echo '<form action="exibir.php" method="post" id="form">';

            echo '<label for="cpf">CPF:</label>';
            echo '<input type="text" id="cpf" name="cpf"><br><br>';

            echo '<label for="Nome">Nome:</label>';
            echo '<input type="text" id="Nome" name="Nome">';

            echo '<label for="datanasc">Data de nascimento:</label>';
            echo '<input type="date" name="datanasc">';

            echo '<label for="sexo">Sexo:</label>';
            echo '<select name="sexo" id="sexo">';
                echo '<option value="Masculino">Masculino</option>';
                echo '<option value="Feminino">Feminino</option>';
                echo '<option value="Outro">Outro</option>';
            echo '</select><br><br>';

            echo '<label for="endereco">Endereço:</label>';
            echo '<input type="text" id="endereco" name="endereco">';

            echo '<label for="telefone">Telefone:</label>';
            echo '<input type="text" id="telefone" name="telefone"><br><br>';
            echo '<hr><br>';

            echo '<label for="Setor">Setor:</label>';
            echo '<input type="text" id="Setor" name="Setor"><br><br>';

            echo '<label for="Cargo">Cargo:</label>';
            echo '<input type="text" id="Cargo" name="Cargo"><br><br>';

            echo '<label for="Salario">Salário:</label>';
            echo '<input type="number" id="Salario" name="Salario"><br><br>';

            echo '<input type="hidden" name="Tipo" value="Adm">';

            echo '<button type="button"><a href="http://192.168.50.139/dwilliam/ads101/06052023-TrabalhoFInal/"><< Voltar</a></button>';
            echo '<input type="submit" value="Próximo >>">';
            echo '<input type="reset" value="Limpar">';
            
            
            echo '</form>';
        echo '</fieldset>';

    echo '</body>';
echo '</html>';
}
elseif ($Tipo == 'docente') {
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
        echo'<div id="cab">';
            echo '<div><img src="univicosa_horizontal.png" alt="univicosa_horizontal" width="200px"></div>';
            echo '<div id="titulo">';
                echo '<h1>Página de cadastro - Docente</h1>';
            echo '</div>';
        echo '</div><br><br>';

    echo '<fieldset>';
        echo '<legend>Dados:</legend>';
        echo '<form action="exibir.php" method="post" id="form">';

            echo '<label for="cpf">CPF:</label>';
            echo '<input type="text" id="cpf" name="cpf"><br><br>';

            echo '<label for="Nome">Nome:</label>';
            echo '<input type="text" id="Nome" name="Nome">';

            echo '<label for="datanasc">Data de nascimento:</label>';
            echo '<input type="date" name="datanasc">';

            echo '<label for="sexo">Sexo:</label>';
            echo '<select name="sexo" id="sexo">';
                echo '<option value="Masculino">Masculino</option>';
                echo '<option value="Feminino">Feminino</option>';
                echo '<option value="Outro">Outro</option>';
            echo '</select><br><br>';

            echo '<label for="endereco">Endereço:</label>';
            echo '<input type="text" id="endereco" name="endereco">';

            echo '<label for="telefone">Telefone:</label>';
            echo '<input type="text" id="telefone" name="telefone"><br><br>';
            echo '<hr><br>';

            echo '<label for="Cursos">Cursos:</label>';
            echo '<input type="text" id="Cursos" name="Cursos"><br><br>';

            echo '<label for="Disciplinas">Disciplinas:</label>';
            echo '<input type="text" id="Disciplinas" name="Disciplinas"><br><br>';

            echo '<label for="Turmas">Turmas:</label>';
            echo '<input type="text" id="Turmas" name="Turmas"><br><br>';

            echo '<label for="Salario">Salário:</label>';
            echo '<input type="text" id="Salario" name="Salario"><br><br>';

            echo '<input type="hidden" name="Tipo" value="docente">';

            echo '<button type="button"><a href="http://192.168.50.139/dwilliam/ads101/06052023-TrabalhoFInal/"><< Voltar</a></button>';
            echo '<input type="submit" value="Próximo >>">';
            echo '<input type="reset" value="Limpar">';
            
            
            echo '</form>';
        echo '</fieldset>';
}

elseif ($Tipo == 'discente') {
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
            echo'<div id="cab">';
                echo '<div><img src="univicosa_horizontal.png" alt="univicosa_horizontal" width="200px"></div>';
                echo '<div id="titulo">';
                    echo '<h1>Página de cadastro - Discente</h1>';
                echo '</div>';
            echo '</div><br><br>';

        echo '<fieldset>';
            echo '<legend>Dados:</legend>';
            echo '<form action="exibir.php" method="post" id="form">';

            echo '<label for="cpf">CPF:</label>';
            echo '<input type="text" id="cpf" name="cpf"><br><br>';

            echo '<label for="Nome">Nome:</label>';
            echo '<input type="text" id="Nome" name="Nome">';

            echo '<label for="datanasc">Data de nascimento:</label>';
            echo '<input type="date" name="datanasc">';

            echo '<label for="sexo">Sexo:</label>';
            echo '<select name="sexo" id="sexo">';
                echo '<option value="Masculino">Masculino</option>';
                echo '<option value="Feminino">Feminino</option>';
                echo '<option value="Outro">Outro</option>';
            echo '</select><br><br>';

            echo '<label for="endereco">Endereço:</label>';
            echo '<input type="text" id="endereco" name="endereco">';

            echo '<label for="telefone">Telefone:</label>';
            echo '<input type="text" id="telefone" name="telefone"><br><br>';
            echo '<hr><br>';

            echo '<label for="Cursos">Cursos:</label>';
            echo '<input type="text" id="Cursos" name="Cursos"><br><br>';
            
            echo '<label for="Disciplinas">Disciplinas:</label>';
            echo '<input type="text" id="Disciplinas" name="Disciplinas"><br><br>';

            echo '<label for="Turmas">Turmas:</label>';
            echo '<input type="text" id="Turmas" name="Turmas"><br><br>';

            echo '<input type="hidden" name="Tipo" value="discente">';

            echo '<button type="button">
                    <a href="http://192.168.50.139/dwilliam/ads101/06052023-TrabalhoFInal/"><< Voltar</a>
                </button>';
            echo '<input type="submit" value="Próximo >>">';
            echo '<input type="reset" value="Limpar">';
            
            
            echo '</form>';
        echo '</fieldset>';
}

?>
