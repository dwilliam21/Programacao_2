<html>

<head>
    <title></title>
    <meta charset="utf-8">
</head>

<?php
$Nome = $_POST["Nome"];
$Idade = $_POST["Idade"];
$Curso = $_POST["Curso"];

require_once("Aluno.class.php");
$aluno1 = new Aluno($Nome, $Idade, $Curso);

echo $aluno1->VerAluno();

?>

</html>