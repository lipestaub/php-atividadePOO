<?php
    class Faculdade {
        public string $nome;
        public array $disciplinas;

        public function __construct(string $nome, array $disciplinas) {
            $this->nome = $nome;
            $this->disciplinas = $disciplinas;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome(string $nome) {
            $this->nome = $nome;
        }

        public function getDisciplinas() {
            return $this->disciplinas;
        }

        public function setDisciplinas(array $disciplinas) {
            $this->disciplinas = $disciplinas;
        }
    }
?>