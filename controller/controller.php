<?php
include_once("../controller/aluno/aluno.php");

$cadastrarAluno = new Aluno;
$cadastrarAluno->dados_aluno();
$cadastrarAluno->calcula_matricula($a);
$cadastrarAluno->cadastrar();
