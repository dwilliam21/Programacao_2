<?php

require_once("Peça.class.php");

class Roda extends Peça{

    public $Tipo;
    public $Tamanho;

function __construct($Nome,$Custo,$Distribuidor,$Tipo,$Tamanho){

parent::__construct($Nome,$Custo,$Distribuidor);

$this->Tipo=$Tipo;
$this->Tamanho=$Tamanho;
    }

function VerPeça(){
parent:: VerPeça();
echo "<b>Tipo: </b>{$this->Tipo}<br>";
echo "<b>Tamanho: </b>{$this->Tamanho}";
}
}
?>