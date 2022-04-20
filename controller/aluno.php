
<?php
include_once("../view/cabeçalho.php");
include_once("../model/conexao.php");
include_once("../model/cadastrar.php");

function dados_aluno()
{
    $dados_aluno = array 
    (
        'nome' => $_POST['nome'],
        'matricula' => $_POST['matricula'],
        'data_nasc' => $_POST['data_nasc'],
        'idade' => calcula_idade( $_POST['data_nasc'])
    );

    return $dados_aluno;
};

function cadastrar(){
    $dados = dados_aluno();
    $id = insert($dados);

    echo '</br>';
    echo '<a href="http://localhost/sistemaEscola/index.php" ><button class="btn btn-success">Voltar</button></a>';
}

cadastrar();

function calcula_idade($data){

    $data_atual = date("Y-m-d");
    $lista = explode('-', $data_atual);
    
    $ano_atual = $lista[0];
    $mes_atual = $lista[1];

    $lista_dt_nasc = explode('-', $data);
    
    $ano_nasc = $lista_dt_nasc[0];
    $mes_nasc = $lista_dt_nasc[1];

    $idade = $ano_atual - $ano_nasc;
    
    return $idade;
}

