<?php

class Treinador
{
	public $nome;
	public $idade;

	    public function __construct($tmpNome, $tmpIdade,)
    {
     	
     	$this->nome = $tmpNome;
     	$this->idade = $tmpIdade;
    }

    public function setNome($novoNome)
    {
    	$this->nome = $novoNome;
    }

    public function getNome()
    {
    	return $this->nome;
    }

    public function setIdade($novaIdade)
    {
    	$this->idade = $novaIdade;
    }

    public function getIdade()
    {
    	return $this->idade;
    }

}
