<?php
$Peca = $_POST['Peca'];

    if ($Peca == "Motor"){
        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<head>";
        echo "<title>Página de cadastro</title>";
        echo "<meta charset='utf-8'>";
        echo '<link rel="stylesheet" href="estilo.css">';
        echo "</head>";
        echo "<body>";
        echo "<div>";
        echo "<h1>Motor</h1>";
        echo "</div>";
        echo "<div id='content'>";
        echo "<fieldset>";
        echo "<h2>Formulário de entrada de dados</h2>";
        echo "<form id='formulario' method='post' action='exibir.php'>";
        echo '<p>Nome da peça: <input type="text" name="Nome"></p>';
        echo '<p>Custo: <input type="text" name="Custo"></p>';
        echo '<p>Distribuidor: <input type="text" name="Distribuidor"></p>';
        echo '<p>Rendimento: <input type="text" name="Rendimento"></p>';
        echo '<p>Consumo: <input type="text" name="Consumo"></p>';
        echo '<input type="hidden" name="Peca" value="Motor">';
        echo '<p><input type="submit" value="enviar"</p>';
        echo "</form>";
        echo "</fieldset>";
        echo "</div>";
        echo "</body>";
        echo "</html>";

    } elseif ($Peca == "Pneu"){ 
        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<head>";
        echo "<title>Página de cadastro</title>";
        echo "<meta charset='utf-8'>";
        echo '<link rel="stylesheet" href="estilo.css">';
        echo "</head>";
        echo "<body>";
        echo "<div>";
        echo "<h1>Pneu</h1>";
        echo "</div>";
        echo "<div id='content'>";
        echo "<fieldset>";
        echo "<h2>Formulário de entrada de dados</h2>";
        echo "<form id='formulario' method='post' action='exibir.php'>";
        echo '<p>Nome: <input type="text" name="Nome"></p>';
        echo '<p>Custo: <input type="text" name="Custo"></p>';
        echo '<p>Distribuidor: <input type="text" name="Distribuidor"></p>';
        echo '<p>Tipo: <input type="text" name="Tipo"></p>';
        echo '<p>Tamanho: <input type="text" name="Tamanho"></p>';
        echo '<p>Marca: <input type="text" name="Marca"></p>';
        echo '<input type="hidden" name="Peca" value="Pneu">';
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
        echo "<body>";
        echo "<div>";
        echo "<h1>Roda</h1>";
        echo "</div>";
        echo "<div id='content'>";
        echo "<fieldset>";
        echo "<h2>Formulário de entrada de dados</h2>";
        echo "<form id='formulario' method='post' action='exibir.php'>";
        echo '<p>Nome: <input type="text" name="Nome"></p>';
        echo '<p>Custo: <input type="text" name="Custo"></p>';
        echo '<p>Distribuidor: <input type="text" name="Distribuidor"></p>';
        echo '<p>Tipo: <input type="text" name="Tipo"></p>';
        echo '<p>Tamanho: <input type="text" name="Tamanho"></p>';
        echo '<p><input type="submit" value="enviar"</p>';
        echo "</form>";
        echo "</fieldset>";
        echo "</div>";
        echo "</body>";
        echo "</html>";}

?>