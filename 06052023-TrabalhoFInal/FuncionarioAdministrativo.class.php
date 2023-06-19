<?php

    require_once("Pessoa.class.php");

    class FuncionarioAdm extends Pessoa{

        public $Setor;
        public $Cargo;
        public $Salario;

    function __construct($CPF,$Nome,$Sexo,$Endereco,$Telefone,$DataNascimento,$Setor,$Cargo,$Salario){
        parent::__construct($CPF,$Nome,$Sexo,$Endereco,$Telefone,$DataNascimento);

        $this->Setor = $Setor;
        $this->Cargo = $Cargo;
        $this->Salario = $Salario;

    }

    function VerPessoa(){
        parent::VerPessoa();
        
        echo "<fieldset>";
        echo "<b>Setor: </b>{$this->Setor}<br>";
        echo "<b>Cargo: </b>{$this->Cargo}<br>";
        echo "<b>Salário: R$</b>{$this->Salario}<br>";
        echo "</fieldset>";

    }
    }
?>