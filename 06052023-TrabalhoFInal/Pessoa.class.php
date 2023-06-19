<?php

class Pessoa{
    
    public $CPF;
    public $Nome;
    public $Sexo;
    public $Endereco;
    public $Telefone;
    public $DataNascimento;

    function __construct($CPF,$Nome,$Sexo,$Endereco,$Telefone,$DataNascimento){

        $this->CPF = $CPF;
        $this->Nome = $Nome;
        $this->Sexo = $Sexo;
        $this->Endereco = $Endereco;
        $this->Telefone = $Telefone;
        $this->DataNascimento = $DataNascimento;
    }

    function VerPessoa(){

        echo "<fieldset>";
        echo "<b>CPF: </b>{$this->CPF}<br>";
        echo "<b>Nome: </b>{$this->Nome}<br>";
        echo "<b>Sexo: </b>{$this->Sexo}<br>";
        echo "<b>Endereço: </b>{$this->Endereco}<br>";
        echo "<b>Telefone: </b>{$this->Telefone}<br>";
        echo "<b>Data de nascimento: </b>{$this->DataNascimento}<br>";
        echo "</fieldset>";
    }
}

?>