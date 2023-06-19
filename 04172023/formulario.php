<?php
$Veiculo = $_POST['Veiculo'];

    if ($Veiculo == "Carro"){
        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<head>";
        echo "<title>Página de cadastro</title>";
        echo "<meta charset='utf-8'>";
        echo '<link rel="stylesheet" href="estilo.css">';
        echo "</head>";
        echo "<body id='carro'>";
        echo "<div id='header'>";
        echo "<h1>Carros</h1>";
        echo "</div>";
        echo "<div id='content'>";
        echo "<fieldset>";
        echo "<h2>Formulário de entrada de dados</h2>";
        echo "<form id='formulario' method='post' action='exibir.php'>";
        echo '<p>Fabricante: <input type="text" name="Fabricante"></p>';
        echo '<p>Modelo: <input type="text" name="Modelo"></p>';
        echo '<p>Placa: <input type="text" name="Placa"></p>';
        echo '<p>Renavan: <input type="text" name="Renavan"></p>';
        echo '<p>Chassi: <input type="text" name="Chassi"></p>';
        echo '<p>Cor: <input type="text" name="Cor"></p>';
        echo '<p>Motor/Cilindradas: <input type="text" name="Motor"></p>';
        echo '<p>Número de Portas: <input type="text" name="Portas"></p>';
        echo '<p>Passageiros: <input type="text" name="Passageiros"></p>';
        echo '<input type="hidden" name="Veiculo" value="Carro">';
        echo '<p><input type="submit" value="enviar"</p>';
        echo "</form>";
        echo "</fieldset>";
        echo "</div>";
        echo "</body>";
        echo "</html>";

    } elseif ($Veiculo == "Moto"){ 
        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<head>";
        echo "<title>Página de cadastro</title>";
        echo "<meta charset='utf-8'>";
        echo '<link rel="stylesheet" href="estilo.css">';
        echo "</head>";
        echo "<body id='moto'>";
        echo "<div id='header'>";
        echo "<h1>Motos</h1>";
        echo "</div>";
        echo "<div id='content'>";
        echo "<fieldset>";
        echo "<h2>Formulário de entrada de dados</h2>";
        echo "<form id='formulario' method='post' action='exibir.php'>";
        echo '<p>Fabricante: <input type="text" name="Fabricante"></p>';
        echo '<p>Modelo: <input type="text" name="Modelo"></p>';
        echo '<p>Placa: <input type="text" name="Placa"></p>';
        echo '<p>Renavan: <input type="text" name="Renavan"></p>';
        echo '<p>Chassi: <input type="text" name="Chassi"></p>';
        echo '<p>Cor: <input type="text" name="Cor"></p>';
        echo '<p>Motor/Cilindradas: <input type="text" name="Motor"></p>';
        echo '<input type="hidden" name="Veiculo" value="Moto">';
        echo '<p><input type="submit" value="enviar"</p>';
        echo "</form>";
        echo "</fieldset>";
        echo "</div>";
        echo "</body>";
        echo "</html>";


    } else{echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<head>";
        echo "<title>Página de cadastro</title>";
        echo "<meta charset='utf-8'>";
        echo '<link rel="stylesheet" href="estilo.css">';
        echo "</head>";
        echo "<body id='caminhao'>";
        echo "<div id='header'>";
        echo "<h1>Caminhão</h1>";
        echo "</div>";
        echo "<div id='content'>";
        echo "<fieldset>";
        echo "<h2>Formulário de entrada de dados</h2>";
        echo "<form id='formulario' method='post' action='exibir.php'>";
        echo '<p>Fabricante: <input type="text" name="Fabricante"></p>';
        echo '<p>Modelo: <input type="text" name="Modelo"></p>';
        echo '<p>Placa: <input type="text" name="Placa"></p>';
        echo '<p>Renavan: <input type="text" name="Renavan"></p>';
        echo '<p>Chassi: <input type="text" name="Chassi"></p>';
        echo '<p>Cor: <input type="text" name="Cor"></p>';
        echo '<p>Motor/Cilindradas: <input type="text" name="Motor"></p>';
        echo '<p>Carga maxíma: <input type="text" name="Carga"></p>';
        echo '<p><input type="submit" value="enviar"</p>';
        echo "</form>";
        echo "</fieldset>";
        echo "</div>";
        echo "</body>";
        echo "</html>";}
?>