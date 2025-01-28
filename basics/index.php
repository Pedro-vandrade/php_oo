<?php

require_once "Pessoa.php";

$pessoa1 = new Pessoa("Pedro Vargas", 30); // instanciar/criar um novo objeto o tipo pessoa
$pessoa2 = new Pessoa("Maria Bitenourt", 25);


/* como setar valores para o objeto
$pessoa1 ->nome = "Pedro Vargas";
$pessoa1 ->idade = 30;
$pessoa2 ->nome = "Maria Bitencourt";
$pessoa2 ->idade = 25; 

// getting or writing an atribute content

echo "<p>Nome: $pessoa1->nome</p>";
echo "<p>Idade: $pessoa1->idade </p>";

echo "<p>Nome: $pessoa2->nome</p>";
echo "<p>Idade: $pessoa2->idade </p>";*/

// USAR METODOS ACESSORES
$pessoa1->setNome("Maria Regina");
$pessoa1 ->setIdade(26);

$pessoa2->setNome("Lucy");
$pessoa2->setIdade(11);

echo "<p> nome: {$pessoa1->getNome()} </p>";
echo "<p> idade: {$pessoa1->getIdade()} </p>";

echo "<p> nome: {$pessoa2->getNome()} </p>";
echo "<p> idade: {$pessoa2->getIdade()} </p>";


echo "<pre>";
    var_dump($pessoa1);
    var_dump($pessoa2);
echo "</pre>";