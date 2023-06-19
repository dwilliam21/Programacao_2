<?php

class Aluno{

public $Nome;
public $Idade;
public $Curso;

function VerAluno(){
echo "<h2>" .$this->Nome." - ". $this->Idade . "</h2>";
echo "<b>Curso: </b>" . $this->Curso;
echo "<hr>";
}
}
?>
