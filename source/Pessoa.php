<?php

class Pessoa {
    // atributos : (váriaveis)
    private string $nome;
    private int $idade;
    private Endereco $endereco; // pessoa tem um endereço
    private static int $numPessoas = 0;

    public function __construct(string $nome, int $idade, Endereco $endereco)
    {
        $this -> nome = $nome;
        $this -> idade = $idade;
        $this -> endereco = $endereco;
        $this ->validaIdade($idade);
        self::$numPessoas++;
    }
    public function __destruct()
    {
        self::$numPessoas--;
    }

    public function getNome()
    {
        return $this -> nome;
    }

    public function getIdade()
    {
        return $this -> idade;
    }
    public function setNome(string $nome) : void
    {
        $this -> nome = $nome;
    }
    public function setIdade(int $idade) : void
    {
        $this -> idade = $idade; 
    }
    public static function getNumPessoas()
    {
        return self::$numPessoas;
    }
    private function validaIdade(int $idade): void
    {
        if ($this -> idade > 0 AND $this -> idade <120) {
            $this -> idade = $idade;
        } else {
            echo "Idade inválida";
            exit;
        }
    }

}