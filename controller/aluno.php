
<?php
include_once("../view/cabeçalho.php");
include_once("../model/conexao.php");
include_once("../model/cadastrar_aluno.php");

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
}

function cadastrar()
{
    $dados = dados_aluno();
    
    if(!empty($dados)){
        
        $id = insert($dados);
    } 
    else {
        require_once("../view/alerta_campos_null.php");
    }

    echo '</br>';
    echo '<a href="http://localhost/sistemaEscola/index.php"><button class="btn btn-success">Voltar</button></a>';
}

cadastrar();

function calcula_idade($data)
{
    $data_atual = date("Y-m-d");
    $lista_atual = explode('-', $data_atual);
    $lista_dt_nasc = explode('-', $data);

    $ano_atual = $lista_atual[0];
    $mes_atual = $lista_atual[1];
    $dia_atual = $lista_atual[2];

    $ano_nasc = $lista_dt_nasc[0];
    $mes_nasc = $lista_dt_nasc[1];
    $dia_nasc = $lista_dt_nasc[2];

    $idade = $ano_atual - $ano_nasc;
    
    if ($mes_atual < $mes_nasc){
        $idade --;
    } elseif ($dia_atual < $dia_nasc){
        $idade --;
    }

    return $idade;
}
