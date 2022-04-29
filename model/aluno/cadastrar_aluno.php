<?php
include_once("../model/conexao.php");

function insert($dados)
{
    $conexao = conecta();
   
    $query_cad = "INSERT INTO aluno (nome, matricula, nome_pai, nome_mae, data_nasc, serie_aluno, idade, data_matricula) VALUES ('$dados[nome]', '$dados[matricula]', '$dados[nome_pai]', '$dados[nome_mae]', '$dados[data_nasc]', '$dados[serie_aluno]', '$dados[idade]', current_date())";
    $cadastrar = mysqli_query($conexao, $query_cad);
    echo mysqli_error($conexao);
    
    if($cadastrar){
        echo 'Deu certo <br>';
        echo "nome cadastrado foi, " . $dados['nome'], " e sua matricula " . $dados['matricula'], " e sua idade é " . $dados['idade'];
    } else {
        echo 'Erro SQL';
    }    
}
