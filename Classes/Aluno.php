<?php
    require_once __DIR__ . '/Pessoa.php';
    
    class Aluno extends Pessoa {
        public int $matricula;
        public array $notas;

        public function __construct(string $nome, int $idade, int $matricula, array $notas)
        {
            parent::__construct($nome, $idade);
            $this->matricula = $matricula;
            $this->notas = $notas;
        }
    }
?>