<?php
include_once("../model/conexao.php");

function insert($dados){

    $conexao = conecta();
    $query_cad = "INSERT INTO professor (nome, matricula, disciplina, formacao, data_cadastro) VALUES ('$dados[nome]', '$dados[matricula]', '$dados[disciplina]', '$dados[formacao]', current_date())";
    $cadastrar = mysqli_query($conexao, $query_cad);

    if($cadastrar) {
        echo 'Deu certo <br>';
        echo "Professor cadastrado foi: " . $dados['nome'], " e sua matricula " . $dados['matricula'], " sua disciplina é:  " . $dados['disciplina'];
    }
    else {
        echo 'Erro no SQL';
    }    
}
