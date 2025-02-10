<?php

class Endereco {
 private string $uf;
 private string $cidade;
 private string $bairro;
 private string $logradouro;
 private string $numero;
 private string $complemento;
 private string $cep;

 public function __construct(string $uf, string $cidade, string $bairro, string $logradouro, string $numero, string $complemento, string $cep)
 {
     $this -> uf = $uf;
     $this -> cidade = $cidade;
     $this -> bairro = $bairro;
     $this -> logradouro = $logradouro;
     $this -> numero = $numero;
     $this -> complemento = $complemento;
     $this -> cep = $cep;
 }

 public function getUf() : string // retorna a uf
 {
     return $this -> uf;
 }
 public function setUf (string $uf) : void // determina a uf repassada
 {
     $this -> uf = $uf;
 }
 public function getCidade() : string // retorna a cidade
 {
     return $this -> cidade;
 }
    public function setCidade (string $cidade) : void // determina a cidade repassada
    {
        $this -> cidade = $cidade;
    }
    public function getBairro() : string // retorna o bairro
    {
        return $this -> bairro;
    }
    public function setBairro (string $bairro) : void // determina o bairro repassado
    {
        $this -> bairro = $bairro;
    }
    public function getLogradouro() : string // retorna o logradouro
    {
        return $this -> logradouro;
    }
    public function setLogradouro (string $logradouro) : void // determina o logradouro repassado
    {
        $this -> logradouro = $logradouro;
    }
    public function getNumero() : string // retorna o número
    {
        return $this -> numero;
    }
    public function setNumero (string $numero) : void // determina o número repassado
    {
        $this -> numero = $numero;
    }
    public function getComplemento() : string // retorna o complemento
    {
        return $this -> complemento;
    }
    public function setComplemento (string $complemento) : void // determina o complemento repassado
    {
        $this -> complemento = $complemento;
    }

}