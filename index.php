<?php
    require_once __DIR__ . '/Classes/Aluno.php';
    require_once __DIR__ . '/Classes/Disciplina.php';
    require_once __DIR__ . '/Classes/Faculdade.php';
    require_once __DIR__ . '/Classes/Pessoa.php';
    require_once __DIR__ . '/Classes/Professor.php';

    $aluno1 = new Aluno('Felipe', 20, 1234, [10.0, 9.5, 8.0]);
    $aluno2 = new Aluno('Gabriel', 20, 5421, [7.0, 8.5, 9.0]);
    $aluno3 = new Aluno('Pedro', 20, 2153, [7.0, 9.5, 6.0]);
    $professor = new Professor('Anderson', 30, []);
    $disciplina = new Disciplina('Estrutura de Dados', 280, $professor, [$aluno1, $aluno2, $aluno3]);
    $faculdade = new Faculdade('Unisc', [$disciplina]);

    $dados = json_encode($faculdade, JSON_PRETTY_PRINT);

    $filePath = __DIR__ . '/files/arquivo.json';
    $openedFile = fopen($filePath, 'a');
    fwrite($openedFile, $dados);
    fclose($openedFile);
?>