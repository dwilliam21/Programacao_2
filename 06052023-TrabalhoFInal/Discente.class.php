<?php 

    require_once("Pessoa.class.php");

    class Discente extends Pessoa{

        public $Curso;
        public $Disciplinas;
        public $Turmas;

    function __construct($CPF,$Nome,$Sexo,$Endereco,$Telefone,$DataNascimento,$Curso,$Disciplinas,$Turmas){
        parent::__construct($CPF,$Nome,$Sexo,$Endereco,$Telefone,$DataNascimento);

        $this->Curso = $Curso;
        $this->Disciplinas = $Disciplinas;
        $this->Turmas = $Turmas;

      }

      function VerPessoa(){
        parent::VerPessoa();

        echo "<fieldset>";
        echo "<b>Curso: </b>{$this->Curso}<br>";
        echo "<b>Disciplinas: </b>{$this->Disciplinas}<br>";
        echo "<b>Turmas: </b>{$this->Turmas}<br>";
        echo "</fieldset>";
      }
    }
?>