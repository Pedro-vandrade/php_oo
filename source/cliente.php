<?php
class Cliente extends Pessoa{
    private string $datanascimento;
    private string $cpf;
    private float $renda;

    public function __construct(string $nome, int $idade, Endereco $endereco, string $datanascimento, string $cpf, float $renda)
    {
        parent::__construct($nome, $idade, $endereco);
        $this -> datanascimento = $datanascimento;
        $this -> cpf = $cpf;
        $this -> renda = $renda;
    }

    public function getDataNascimento() : string
    {
        return $this -> datanascimento;
    }
    public function getCpf() : string
    {
        return $this -> cpf;
    }
    public function getRenda() : float
    {
        return $this -> renda;
    }   
    public function setDataNascimento(string $datanascimento) : void
    {
        $this -> datanascimento = $datanascimento;
    }
    public function setCpf(string $cpf) : void
    {
        $this -> cpf = $cpf;
    }
    public function setRenda(float $renda) : void
    {
        $this -> renda = $renda;
    }
}
