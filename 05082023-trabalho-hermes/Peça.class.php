<?php

class Peça{

public $Nome;
public $Custo;
public $Distribuidor;

function __construct($Nome,$Custo,$Distribuidor){
    $this->Nome=$Nome;
    $this->Custo=$Custo;
    $this->Distribuidor=$Distribuidor;
}

function VerPeça(){
    echo "<b>Nome da peça: </b>{$this->Nome}<br>";
    echo "<b>Custo da peça: </b>{$this->Custo}<br>";
    echo "<b>Nome do Distribuidor: </b>{$this->Distribuidor}<br>";
}


}


?>