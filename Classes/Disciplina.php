<?php
    class Disciplina {
        public string $nome;
        public int $carga_horaria;
        public Professor $professor;
        public array $alunos;

        public function __construct(string $nome, int $carga_horaria, Professor $professor, array $alunos)
        {
            $this->nome = $nome;
            $this->carga_horaria = $carga_horaria;
            $this->professor = $professor;
            $this->alunos = $alunos;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome(string $nome) {
            $this->nome = $nome;
        }

        public function getCargaHoraria() {
            return $this->carga_horaria;
        }

        public function setCargaHoraria(int $carga_horaria) {
            $this->carga_horaria = $carga_horaria;
        }

        public function getProfessor() {
            return $this->professor;
        }

        public function setProfessor(Professor $professor) {
            $this->professor = $professor;
        }

        public function getAlunos() {
            return $this->alunos;
        }

        public function setAlunos(array $alunos) {
            $this->alunos = $alunos;
        }
    }
?>