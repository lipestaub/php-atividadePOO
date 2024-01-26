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

        public function getMatricula() {
            return $this->matricula;
        }

        public function setMatricula(int $matricula) {
            $this->matricula = $matricula;
        }

        public function getNotas() {
            return $this->notas;
        }

        public function setNotas(array $notas) {
            $this->notas = $notas;
        }
    }
?>