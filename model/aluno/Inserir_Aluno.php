<?php
include_once("../model/Conecta.php");

/* 
model MySql para inserir Alunos no Banco de Dados;
*/
class InserirAluno
{
    function insert($dados)
    {
        $conectarbd = new Conecta;
        $conn = $conectarbd->conectar();
        
        $query_cad = "INSERT INTO aluno (nome, matricula, nome_pai, nome_mae, data_nasc, serie_aluno, idade, data_matricula) VALUES ('$dados[nome]', '$dados[matricula]', '$dados[nome_pai]', '$dados[nome_mae]', '$dados[data_nasc]', '$dados[serie_aluno]', '$dados[idade]', current_date())";
        $querysql = mysqli_query($conn, $query_cad);
       // echo mysqli_error($this->conectarbd);
       // echo mysqli_error($this->query_cad);
        if($querysql):
            echo 'Deu certo <br>';
            echo "nome cadastrado foi, " . $dados['nome'], " e sua matricula " . $dados['matricula'], " e sua idade é " . $dados['idade'];
        else:
            echo 'Erro SQL';
        endif;   
    }
}
