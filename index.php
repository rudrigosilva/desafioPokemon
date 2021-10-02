<?php
require "Treinador.php";
require "Pokemon.php";

$treinador = new Treinador("Ash <br>", "10<br>");

echo $treinador->getNome();
echo $treinador->getIdade();

$pokemon = new Pokemon("pikachu <br>","eletrico <br>",200);

echo $pokemon->getNomePokemon();
echo $pokemon->getTipo();
echo $pokemon->getPoder();
echo "<br>";

$pokemon = new Pokemon("pinser <br>","inseto <br>",300);

echo $pokemon->getNomePokemon();
echo $pokemon->getTipo();
echo $pokemon->getPoder();
echo "<br>";

$pokemon = new Pokemon("bulbassauro <br>","planta <br>",100);

echo $pokemon->getNomePokemon();
echo $pokemon->getTipo();
echo $pokemon->getPoder();
echo "<br>";

$treinador = new Treinador ("Brock <br>", "15<br>");

echo $treinador->getNome();
echo $treinador->getIdade();

$pokemon = new Pokemon("onix <br>","pedra <br>",400);

echo $pokemon->getNomePokemon();
echo $pokemon->getTipo();
echo $pokemon->getPoder();
echo "<br>";

$pokemon = new Pokemon("heracross <br>","inseto <br>",250);

echo $pokemon->getNomePokemon();
echo $pokemon->getTipo();
echo $pokemon->getPoder();
echo "<br>";

$pokemon = new Pokemon("magicarp <br>","agua <br>", 20);

echo $pokemon->getNomePokemon();
echo $pokemon->getTipo();
echo $pokemon->getPoder();
echo "<br>";
