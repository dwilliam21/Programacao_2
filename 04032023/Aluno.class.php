<?php

class Aluno
{

	public $Nome;
	public $Idade;
    public $Curso;

	function __construct($Nome, $Idade, $Curso)
	{
        $this->Nome = $Nome;
		$this->Idade = $Idade;
        $this->Curso = $Curso;

	}

	function VerAluno()
	{

		echo "<h2>" . $this->Nome . "</h2>";
		echo "<p> <b>Idade: </b>" . $this->Idade . "</p>";
        echo "<p> <b>Curso: </b>" . $this->Curso . "</p>";

	}
}

?>