<?php

require_once("Funcionario.class.php");

Class FuncionarioHorista extends Funcionario{


    public $ValorSalario;

    function __construct($Nome,$Documento,$NumeroHoras,$ValorSalario){

        parent::__construct($Nome,$Documento,$NumeroHoras);

        $this->ValorSalario = $ValorSalario;
    }

    function ValorSalario(){
        return $this->ValorSalario * $this->NumeroHoras;
    }

    function Tipo(){
        return "Horista";
    }

    function VerFuncionario(){

        parent::VerFuncionario();

        echo "<b>Valor do salário: </b>R$ {$this->ValorSalario()}<br>";
        echo "<b>Tipo de Funcionário: </b>{$this->Tipo()}";
    }
}
?>

