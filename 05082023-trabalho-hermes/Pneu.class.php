<?php

require_once("Peça.class.php");

class Pneu extends Peça{

    public $Tipo;
    public $Tamanho;
    public $Marca;

function __construct($Nome,$Custo,$Distribuidor,$Tipo,$Tamanho,$Marca){

parent::__construct($Nome,$Custo,$Distribuidor);

$this->Tipo=$Tipo;
$this->Tamanho=$Tamanho;
$this->Marca=$Marca;
    }

function VerPeça(){
parent:: VerPeça();
echo "<b>Tipo: </b>{$this->Tipo}<br>";
echo "<b>Tamanho: </b>{$this->Tamanho}<br>";
echo "<b>Marca: </b>{$this->Marca}";
}
}
?>