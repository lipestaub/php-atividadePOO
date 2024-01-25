<?php
    interface PessoaInterface {
        public function getNome();
        public function setNome(string $nome);
        public function getIdade();
        public function setIdade(int $idade);
    }
?>