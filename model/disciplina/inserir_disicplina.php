<?php
include_once("../model/Conecta.php");

class InserirDisciplina
{
    function insert($dados)
    {
        $conectarbd = new Conecta;
        $conn = $conectarbd->conectar();
        $query_cad = "INSERT INTO disciplina (nome_disciplina, data_cadastro) VALUES ('$dados[nome]', current_date())";
        $querysql = mysqli_query($conn, $query_cad);

        /* if($querysql == true):
            //echo 'Deu certo <br>';
            echo "Disciplina cadastrada foi: " . $dados['nome'];
            require_once("../view/alerta_cad_sucesso.php");
        else:
            require_once("../view/alerta_campos_null.php");
            //echo 'Erro no SQL';  
        endif; */
    }
}