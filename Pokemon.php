<?php

class Pokemon extends Treinador
{
	public $nomePokemon;
	public $tipo;
	public $poder;



	public function __construct ($tmpNomePokemon, $tmpTipo, $tmpPoder)
	{
		$this->nomePokemon = $tmpNomePokemon;
		$this->tipo = $tmpTipo;
		$this->poder = $tmpPoder;

	}

	public function setNomePokemon($tmpNomePokemon)
	{
		$this->nomePokemon = $tmpNomePokemon;
	}

	public function getNomePokemon()
	{
		return $this->nomePokemon;
	}

	public function setTipo($tmpTipo)
	{
		$this->tipo = $tmpTipo;
	}

	public function getTipo()
	{
		return $this->tipo;
	}

	public function setPoder($tmpPoder)
	{
		$this->poder = $tmpPoder;
	}

	public function getPoder()
	{
		return $this->poder;
	}
}
