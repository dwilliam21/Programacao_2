<html>
<head>
<meta charset="utf-8">
</head>
<?php

require_once("Aluno.class.php");
$Aluno1 = new Aluno();

$Aluno1->Nome= "David";
$Aluno1->Idade = "21 anos";
$Aluno1->Curso = "ADS";

$Aluno2 = new Aluno();

$Aluno2->Nome= "Thales";
$Aluno2->Idade = "21 anos";
$Aluno2->Curso = "ADS";

 echo $Aluno1->VerAluno();
 echo $Aluno2->VerAluno();

?>
</html>
