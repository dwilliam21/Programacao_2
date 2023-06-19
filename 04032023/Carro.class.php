<?php

class Carro
{

	public $Marca;
	public $Modelo;

	function __construct($Marca, $Modelo)
	{

		$this->Marca = $Marca;
		$this->Modelo = $Modelo;

	}

	function VerCarro()
	{

		echo "<h2>" . $this->Marca . "</h2>";
		echo "<p> <b>Modelo: </b>" . $this->Modelo . "</p>";

	}
}

?>