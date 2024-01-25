<?php
    require_once __DIR__ . '/Pessoa.php';

    class Professor extends Pessoa {
        public array $disciplinas;

        public function __construct(string $nome, int $idade, array $disciplinas)
        {
            parent::__construct($nome, $idade);
            $this->disciplinas = $disciplinas;
        }

        public function getDisciplinas() {
            return $this->disciplinas;
        }

        public function setDisciplinas(array $disciplinas) {
            $this->disciplinas = $disciplinas;
        }
    }
?>