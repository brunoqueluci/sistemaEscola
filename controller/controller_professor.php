<?php
include_once("../controller/professor/professor.php");

$cadastrarAluno = new Professor;
//$cadastrarAluno->dados_aluno();
//$cadastrarAluno->calcula_matricula($a);
$cadastrarAluno->cadastrar();
