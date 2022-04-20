<?php
include_once("../model/conexao.php");

function insert($dados){

    $conexao = conecta();
    //var_dump($conexao);
    $query_cad = "INSERT INTO aluno (nome, matricula, data_nasc, idade) VALUES ('$dados[nome]', '$dados[matricula]', '$dados[data_nasc]', '$dados[idade]')";
    $cadastrar = mysqli_query($conexao, $query_cad);
    
    if($cadastrar) {
        echo 'Deu certo <br>';
        echo "nome cadastrado foi, " . $dados['nome'], " e sua matricula " . $dados['matricula'], " e sua idade é " . $dados['idade'];
    }
    else {
        echo 'Erro';
    }    
}
