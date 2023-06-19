<?php

require_once("Peça.class.php");

class Motor extends Peça{

    public $Rendimento;
    public $Consumo;

function __construct($Nome,$Idade,$Dono,$Rendimento,$Consumo){

parent::__construct($Nome,$Idade,$Dono);

$this->Rendimento=$Rendimento;
$this->Consumo=$Consumo;
    }

function VerPeça(){
parent:: VerPeça();
echo "<b>Rendimento: </b>{$this->Rendimento}<br>";
echo "<b>Consumo: </b>{$this->Consumo}";
}
}
?>