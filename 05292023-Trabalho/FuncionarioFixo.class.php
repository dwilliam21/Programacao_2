<?php

require_once("Funcionario.class.php");

Class FuncionarioFixo extends Funcionario{


    public $ValorSalario;

    function __construct($Nome,$Documento,$NumeroHoras,$ValorSalario){

        parent::__construct($Nome,$Documento,$NumeroHoras);

        $this->ValorSalario = $ValorSalario;
    }

    function ValorSalario(){
        return $this->ValorSalario;
    }

    function Tipo(){
        return "Fixo";
    }

    function VerFuncionario(){

        parent::VerFuncionario();

        echo "<b>Valor do salário: </b>{$this->ValorSalario()}<br>";
        echo "<b>Tipo de Funcionário: </b>{$this->Tipo()}";
    }
}
?>