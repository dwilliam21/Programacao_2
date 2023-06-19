<?php

class Funcionario{

    public $Nome;
    public $Documento;
    public $NumeroHoras;

    function __construct($Nome,$Documento,$NumeroHoras){

        $this->Nome = $Nome;
        $this->Documento = $Documento;
        $this->NumeroHoras = $NumeroHoras;
    }

    function VerFuncionario(){
        echo "<b>Nome: </b>{$this->Nome}<br>";
        echo "<b>Documento: </b>{$this->Documento}<br>";
        echo "<b>Horas trabalhadas: </b>{$this->NumeroHoras} horas<br>";
    }
}
?>