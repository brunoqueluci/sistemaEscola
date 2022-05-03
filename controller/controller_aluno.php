<?php
include_once("../controller/aluno/aluno.php");
include_once("../controller/calcula_idade.php");

$cadastrarAluno = new Aluno;
//$cadastrarAluno->dados_aluno();
//$cadastrarAluno->calcula_matricula($a);
$cadastrarAluno->cadastrar();
