<?php
    require_once("Pessoa.class.php");

    class FuncionarioDocente extends Pessoa{

        public $Cursos;
        public $Disciplinas;
        public $Turmas;
        public $Salario;
    function __construct($CPF,$Nome,$Sexo,$Endereco,$Telefone,$DataNascimento,$Cursos,$Salario,$Disciplinas,$Turmas){
        parent::__construct($CPF,$Nome,$Sexo,$Endereco,$Telefone,$DataNascimento);

        $this->Cursos = $Cursos;
        $this->Disciplinas = $Disciplinas;
        $this->Turmas = $Turmas;
        $this->Salario = $Salario;

    }

    function VerPessoa(){
        parent::VerPessoa();

        echo "<fieldset>";
        echo "<b>Cursos </b>{$this->Cursos}<br>";
        echo "<b>Disciplinas ministradas: </b>{$this->Disciplinas}<br>";
        echo "<b>Turmas: </b>{$this->Turmas}<br>";
        echo "<b>Salário: R$</b>{$this->Salario}<br>";     
        echo "</fieldset>";   
    }
    }
?>