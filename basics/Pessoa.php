<?php

    class Pessoa
    {
        // Atributos, características = variáveis
        private string $nome;
        private int $idade;

        // Comportamentos, métodos = funções
        public function __construct(string $nome, int $idade)
        {
            $this-> nome = $nome;
            $this-> idade = $idade;
            $this-> validadeIdade($idade);
        }
        // metódos acessores - get e set
        public function getNome()
        {
            return $this -> nome;
        }
        public function getIdade() {
            return $this -> idade;
        }
        public function setNome(string $nome)
        {
            $this -> nome = $nome;
        }
        public function setIdade(int $idade)
        {
            $this ->idade = $idade;
        }
        public function validadeIdade(int $idade)
        {
            if ($this-> idade> 0 AND $this -> idade < 120){
                $this->idade = $idade;
            } else {
                echo "Idade não permitida";
                exit;
            }

        }
    }