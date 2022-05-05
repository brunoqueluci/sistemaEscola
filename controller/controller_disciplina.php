<?php
include_once("../controller/disciplina/disciplina.php");

$cadastrarAluno = new Disciplina;
//$cadastrarAluno->dados_aluno();
//$cadastrarAluno->calcula_matricula($a);
$cadastrarAluno->cadastrar();
