<?php
require_once 'source/Pessoa.php';
require_once 'source/Endereco.php';
$endereco1 = new Endereco('RS', 'Porto Alegre', 'Centro', 'Rua dos Andradas', '156', 'Sala 501', '90010-410');
$pessoa1 = new Pessoa('Pedro Vargas', 30, $endereco1); // criando um novo objeto do tipo Pessoa 
$pessoa2 = new Pessoa('Marria Bitencourt', 25, $endereco1); // criando um novo objeto do tipo Pessoa
//unset($pessoa2); // destruindo o objeto

echo "<p>Número de pessoas :". Pessoa::getNumPessoas(). "</p>";

/* $pessoa1 -> nome = "Pedro Vargas";
$pessoa1 -> idade = 30;
$pessoa2 -> nome = "Maria Bitencourt";
$pessoa2 -> idade = 25;*/

echo "<p>Nome : {$pessoa1->getNome()}</p>";
echo "<p>Idade : {$pessoa1->getIdade()}</p>";
echo "<hr>";
echo "<p>Nome : {$pessoa2->getNome()}</p>";
echo "<p>Idade : {$pessoa2->getIdade()}</p>";


var_dump($pessoa1); // imprimindo o objeto;

//usar metodos aecessores 
$pessoa1 -> setNome('Pedro Vargas');
$pessoa1 -> setIdade(30);

$pessoa2 -> setNome("Maria Bitencourt");
$pessoa2 -> setIdade(25);

echo "<p>Nome: {$pessoa1 -> getNome()} </p>";
echo "<p>Idade: {$pessoa1 -> getIdade()} </p>";

echo "<pre>";
    var_dump($pessoa1);
    var_dump($pessoa2);
echo "</pre>";