
<?php
include_once("../view/cabeçalho.php");
include_once("../model/professor/cadastrar_professor.php");

/**
 * Método para coleta de dados para array
 */
function dados_professor()
{
    $dados_professor = array 
    (
        'nome' => $_POST['nome'],
        'matricula' => $_POST['matricula'],
        'disciplina' => $_POST['disciplina'],
        'formacao' => $_POST['formacao']
    );

    return $dados_professor;
}

/**
 * Método para cadastro de professor
 */
function cadastrar()
{
    $dados = dados_professor();
    if(!empty($dados)){
        $id = insert($dados);
    } else {
        require_once("../view/alerta_campos_null.php");
    }

    echo '</br>';
    echo '<a href="http://localhost/sistemaEscola/cadastroprofessor.php"><button class="btn btn-success">Voltar</button></a>';
}

cadastrar();
