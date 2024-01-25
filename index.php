<?php
    require_once __DIR__ . '/Classes/Aluno.php';
    require_once __DIR__ . '/Classes/Disciplina.php';
    require_once __DIR__ . '/Classes/Faculdade.php';
    require_once __DIR__ . '/Classes/Pessoa.php';
    require_once __DIR__ . '/Classes/Professor.php';

    $aluno = new Aluno('Felipe', 20, 1234, [10.0, 9.5, 8.0]);
    $professor = new Professor('Anderson', 30, []);
    $disciplina = new Disciplina('Estrutura de Dados', 280, $professor, [$aluno]);
    $faculdade = new Faculdade('Unisc', [$disciplina]);

    var_dump($faculdade);

    $dados = json_encode($faculdade, JSON_PRETTY_PRINT);

    $openedFile = fopen(__DIR__ . '/files/arquivo.json', 'a');
    fwrite($openedFile, $dados);
    fclose($openedFile);
?>