<?php
    require_once __DIR__ . '/Interfaces/PessoaInterface.php';

    abstract class Pessoa implements PessoaInterface{
        public string $nome;
        public int $idade;

        public function __construct(string $nome, int $idade) {
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome(string $nome) {
            $this->nome = $nome;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function setIdade(int $idade) {
            $this->idade = $idade;
        }
    }
?>