<?php
include_once("../model/Conecta.php");

class InserirProfessor
{
    function insert($dados)
    {
        $conectarbd = new Conecta;
        $conn = $conectarbd->conectar();
        $query_cad = "INSERT INTO professor (nome, matricula, disciplina, formacao, data_cadastro) VALUES ('$dados[nome]', '$dados[matricula]', '$dados[disciplina]', '$dados[formacao]', current_date())";
        $querysql = mysqli_query($conn, $query_cad);

        if($querysql):
            //echo 'Deu certo <br>';
            echo "Professor cadastrado foi: " . $dados['nome'], " e sua matricula " . $dados['matricula'], " sua disciplina é:  " . $dados['disciplina'];
            require_once("../view/alerta_cad_sucesso.php");
        else:
            require_once("../view/alerta_campos_null.php");
            //echo 'Erro no SQL';  
        endif;
    }
}