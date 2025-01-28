<?php
require_once 'Pessoa.php';

$pessoa1 = new Pessoa('Pedro Vargas', 30); // criando um novo objeto do tipo Pessoa 
$pessoa2 = new Pessoa('Marria Bitencourt', 25); // criando um novo objeto do tipo Pessoa

/* $pessoa1 -> nome = "Pedro Vargas";
$pessoa1 -> idade = 30;
$pessoa2 -> nome = "Maria Bitencourt";
$pessoa2 -> idade = 25;*/

echo "<p>Nome : $pessoa1->nome</p>";
echo "<p>Idade : $pessoa1->idade</p>";
echo "<hr>";
echo "<p>Nome : $pessoa2->nome</p>";
echo "<p>Idade : $pessoa2->idade</p>";


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